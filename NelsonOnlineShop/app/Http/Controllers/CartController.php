<?php

namespace App\Http\Controllers;

use DB;
use App\Cart;
use App\orders_detail;
use App\order;
use App\products;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function AuthLogin(){
        $Id = Session::get('Id');
        if($Id){
            return Redirect::to('checkout');
        }
        else{
            return Redirect::to('dangnhap-dangky')->send();
        }
    }
 
    public function AddCart(Request $req, $Id){
        $product = DB::table('products')->where('Id', $Id)->first();
        if($product !=null){
            $oldCart = Session::has('Cart') ? Session::get('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart -> AddCart($product, $Id);
            $req->Session()->put('Cart', $newCart);
        }
        return view('pages.carts.cart');
    }

    public function DeleteItemCart(Request $req, $Id){
        $oldCart = Session::has('Cart') ? Session::get('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart -> DeleteItemCart($Id);
        if(Count($newCart->products)>0){
            $req->Session()->put('Cart', $newCart);
        }
        else{
            $req->Session()->forget('Cart');
        }
        return view('pages.carts.cart');
    }
    public function ViewListCart(){
        return view('pages.carts.view_cart');
    }
    public function DeleteItemListCart(Request $req, $Id){
        $oldCart = Session::has('Cart') ? Session::get('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart -> DeleteItemCart($Id);
        if(Count($newCart->products)>0){
            $req->Session()->put('Cart', $newCart);
        }
        else{
            $req->Session()->forget('Cart');
        }
        return view('pages.carts.list_cart');
    }
    public function SaveItemListCart(Request $req, $Id, $quanty){
        $oldCart = Session::has('Cart') ? Session::get('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart -> UpdateItemCart($Id, $quanty);
        $req->Session()->put('Cart', $newCart);
        return view('pages.carts.list_cart');
    }
    
    public function SendMail(Request $req){
        $details= [
            'title'=>'Mail from Nelson online shop',
            'body'=>'Đây là tin nhắn'
        ];
        $code = rand(10000, 99999);
        Session::put('code', $code);
        $mail = $req->Email;
        if($mail){
            \Mail::to($mail)->send(new \App\Mail\SendMail($details));
            return response()->json(['success' => "success"]);
        }
        else{
            return response()->json(['errors' => "errors"]);
        }
    }

    public function getCheckout(){
        $this->AuthLogin();
        $oldCart = Session::has('Cart') ? Session::get('Cart') : null;
        $newCart = new Cart($oldCart);
        $id_acc = Session::get('Id');
        if($newCart){
            return view('pages.carts.checkout');
        }
        else{
            return view('pages.home');
        }
    }

    public function postCheckout(Request $req){
        $oldCart = Session::has('Cart') ? Session::get('Cart') : null;
        $newCart = new Cart($oldCart);
        $products = $newCart->products;
        $id_acc = Session::get('Id');
        $code = Session::Get('code');
        if($req->code == $code){
            $data1 = new order;
            $data1->id_acc = $id_acc;
            $data1->name = $req->name;
            $data1->Email = $req->Email;
            $data1->shipping_address = $req->address;
            $data1->phone_number = $req->phone_number;
            $data1->total_money = $newCart->totalPrice;
            $data1->status = 'Chưa xác thực';
            $data1->save();
            $data =DB::table('order')->where('name', $req->name)->orderBy('Id', 'desc')->first();
            foreach ($products as $key => $value) {
                $order_detail = new orders_detail;
                $order_detail->productID = $value['productInfo']->Id;
                $order_detail->orderID = $data->Id;
                $order_detail->quantity = $value['quanty'];
                $order_detail->price = $value['productInfo']->Price;
                $order_detail->total_money = $value['price'];
                $order_detail->save();
                $sanpham = products::find($value['productInfo']->Id);
                $sanpham->Quantity -= $value['quanty'];
                $sanpham->save();
            }
            $req->Session()->forget('Cart', $newCart);
            
            return redirect('/home');
        }
        else{
            return redirect('/Checkout');
        }
    }

}
