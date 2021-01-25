<?php

namespace App\Http\Controllers;

use DB;
use App\Cart;
use App\products;
use App\productcategories;
use App\accounts;
use App\themes;
use App\order;
use Illuminate\Support\Facades\Redirect;
use App\blogs;
use Validator;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Session;
use App\wishlists;
use App\comments;
Use \Carbon\Carbon;

session_start();
class HomeController extends Controller
{
    public function AuthLogin(){
        $Id = Session::get('Id');
        if($Id){
            return Redirect::to('home');
        }
        else{
            return Redirect::to('dangnhap-dangky')->send();
        }
    }
    public function index(){
        $themes = DB::table('themes')->get();
        $products = DB::table('products')->where('Show_on_home', '1')->get();
        $dtnow = Carbon::now()->toDateString();
        $blogs = DB::table('blogs')->where('Show_on_home', '1')->get();
        $fmdate = '';
        foreach($blogs as $item){
            $a = $item->created_at;
            $fmdate = Carbon::parse($a)->format('d/m/Y');
        }
        
        return view('pages.home', compact('fmdate', 'dtnow'))->with('theme', $themes)->with('pro', $products)->with('blogs', $blogs);
    }
    // public function menu(){
    //     // $themess = themes::get();
    //     $cate = DB::table('productcategories')->where('themeID', 1)->get();
    //     $cate2 = DB::table('productcategories')->where('themeID', 2)->get();
    //     return view('layout.header', compact('cate', 'cate2'));
    // }
    public function show_themes($Id){
        $theme = DB::table('themes')->where('Id', $Id)->get();
        $category =  DB::table('productcategories')->where('themeID', $Id)->get();
        $product = DB::table('products')->where('categoryID', '2')->get();
        return view('pages.theme.show_theme', compact('theme','category', 'product'));
    } 
    public function show_themes2($Id){
        $theme = DB::table('themes')->where('Id', $Id)->get();
        $category =  DB::table('productcategories')->where('themeID', $Id)->get();
        $product = DB::table('products')->where('categoryID', '3')->get();
        return view('pages.theme.show_theme', compact('theme','category', 'product'));
    } 
    public function show_categories($Id, Request $req){
        $cates = DB::table('productcategories')->where('Id', $Id)->first();
       
        $product = DB::table('products')->where('categoryID', $Id);
        if($req->price){
            $price = $req->price;
            switch($price)
            {
                case '1':
                    $product->where('Sale_price','<', 3000000);
                break;
                case '2':
                    $product->whereBetween('Sale_price', [3000000,5000000]);
                break;
                case '3':
                    $product->whereBetween('Sale_price', [5000000,7000000]);
                break;
                case '4':
                    $product->whereBetween('Sale_price', [7000000,10000000]);
                break;
                case '5':
                    $product->where('Sale_price', '>', 10000000);
                break;
            }
        } 
        if($req->orderby){
            if($req->price){
                $price = $req->price;
                switch($price)
                {
                    case '1':
                        $product->where('Sale_price','<', 3000000);
                    break;
                    case '2':
                        $product->whereBetween('Sale_price', [3000000,5000000]);
                    break;
                    case '3':
                        $product->whereBetween('Sale_price', [5000000,7000000]);
                    break;
                    case '4':
                        $product->whereBetween('Sale_price', [7000000,10000000]);
                    break;
                    case '5':
                        $product->where('Sale_price', '>', 10000000);
                    break;
                }
            }
            $orderby = $req->orderby;
            switch($orderby)
            {
                case 'desc':
                    $product->orderBy('Id', 'DESC');
                break;
                case 'asc':
                    $product->orderBy('Id', 'ASC');
                break;
                case 'price_min':
                    $product->orderBy('Price', 'DESC');
                break;
                case 'price_max':
                    $product->orderBy('Price', 'ASC');
                break;
                default:
                    $product->orderBy('Id', 'DESC');
            }
        }

        $product = $product->paginate(8);
        return view('pages.category.show_category', compact('cates','product'));
    }

    public function blog_detail($id){
        $blog = blogs::where('Id', $id)->first();
        $blogs = blogs::where('Id', '!=', $id)->get();
        $fmdate2 = '';
        foreach($blogs as $item){
            $a = $item->created_at;
            $fmdate2 = Carbon::parse($a)->format('d/m/Y');
        }
        $moreimg = json_decode($blog->more_image);
        return view('pages.blogs.blog_detail', compact('blog', 'blogs','fmdate2','moreimg'));
    }

    public function products_detail($id){
        $products = products::where('Id', $id)->first();
        $comments = comments::where('productid', $id)->get();
        $cr_rating = 0;
        foreach($comments as $item){
            $cr_rating += $item->rating;
            
        }
        if($cr_rating)
            $rating = $cr_rating/$comments->count();
        else
            $rating = 0;
        $dtnow = Carbon::now()->toDateString();
        // dd($dtnow);
        $countcmt = comments::where('productid', $id)->get()->count();
        $moreimg = json_decode($products->more_image);
        $mau = json_decode($products->color);
        return view('pages.products.product_detail', compact('products','dtnow', 'comments', 'moreimg','rating', 'countcmt', 'mau'));
    }
    
    public function getSigninup(){
        return view('pages.signin-signup');
    }
    public function postSignin(Request $request){
        $username = $request->user_name;
        $password = md5($request->password);
        $result = DB::table('accounts')->where('user_name', $username)->where('for_admin', '0')->where('password', $password)->first();
        if($result){
            Session::put('name',$result->name);
            Session::put('password',$result->password);
            Session::put('Email',$result->Email);
            Session::put('Id',$result->Id);
            Session::put('phone_number',$result->phone_number);
            Session::put('address',$result->address);
            return response()->json(['success'=>'Data added successfully!']);
        }
        
        else
            {
                return response()->json(['errors'=>'Data added successfully!']);
            }
    }

    public function postSignup(Request $request){
        
        $validator = Validator::make($request->all(),[
            'user_name'     =>  'required',
            'password'     =>  'required',
            'name'             =>  'required',
            'Email'             =>  'required',
            'phone_number'             =>  'required',
            'address'             =>  'required',
        ],[
            'user_name.required' => "Tài khoản không được để trống không được trống",
            'name.required' => "Tên không được trống",
            'Email.required' => "Email không được trống",
            'phone_number.required' => "Số điện thoại khác không được trống",
            'password.required' => "Mật khẩu không được trống khác không được trống",
            'address.required' => "Địa chỉ không được trống"
        ]);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        else{
            $form_data=new accounts;
            $form_data->user_name=$request->user_name;
            $form_data->password= md5($request->password);
            $form_data->name=$request->name;
            $form_data->Email=$request->Email;
            $form_data->phone_number=$request->phone_number;
            $form_data->address=$request->address;
            $form_data->for_admin = 0;
            // dd($form_data);
            $form_data->save();
            return response()->json(['success'=>'Data added successfully!']);
        }
    }
    
    public function psearch(Request $req){
        $searchkey=$req->searchkey;
        Session::put('searchkey',$req->searchkey);
        $product=products::where('ProductName','like',"%$searchkey%")->orwhere('Price','like',"%$searchkey%")->paginate(8);
        return view('pages.search',compact('product','searchkey'));

    }

    public function gsearch(Request $req){
        $searchkey = Session::Get('searchkey');
        $product=products::where('ProductName','like',"%$searchkey%")->orwhere('Price','like',"%$searchkey%");
        if($req->price){
            $price = $req->price;
            switch($price)
            {
                case '1':
                    $product->where('Sale_price','<', 3000000);
                break;
                case '2':
                    $product->whereBetween('Sale_price', [3000000,5000000]);
                break;
                case '3':
                    $product->whereBetween('Sale_price', [5000000,7000000]);
                break;
                case '4':
                    $product->whereBetween('Sale_price', [7000000,10000000]);
                break;
                case '5':
                    $product->where('Sale_price', '>', 10000000);
                break;
            }
        }
        if($req->orderby){
            if($req->price){
                $price = $req->price;
                switch($price)
                {
                    case '1':
                        $product->where('Sale_price','<', 3000000);
                    break;
                    case '2':
                        $product->whereBetween('Sale_price', [3000000,5000000]);
                    break;
                    case '3':
                        $product->whereBetween('Sale_price', [5000000,7000000]);
                    break;
                    case '4':
                        $product->whereBetween('Sale_price', [7000000,10000000]);
                    break;
                    case '5':
                        $product->where('Sale_price', '>', 10000000);
                    break;
                }
            }
            $orderby = $req->orderby;
            switch($orderby)
            {
                case 'desc':
                    $product->orderBy('Id', 'DESC');
                break;
                case 'asc':
                    $product->orderBy('Id', 'ASC');
                break;
                case 'price_min':
                    $product->orderBy('Price', 'DESC');
                break;
                case 'price_max':
                    $product->orderBy('Price', 'ASC');
                break;
                default:
                    $product->orderBy('Id', 'DESC');
            }
        }
        $product = $product->paginate(8);
        return view('pages.search',compact('product','searchkey'));
    }
    public function postComment(Request $request){
        $cmt = comments::all(); 
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
            'rating' => 'required',
        ],[
            'name.required' => "Tên không được trống",
            'email.required' => "Email không được trống",
            'comment.required' => "Bình luận không được trống",
            'rating.required' => "Bạn chưa đánh giá sản phẩm"
        ]);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        else{
            $check = true;
            foreach($cmt as $item){
                if($request->email == $item->email && $request->productid == $item->productid){
                    $check = false;
                    break;
                }
            }
            if($check == false){
                return response()->json(['ermail' => "errors"]);
            }
            else
            {
                    $form_data=new comments;
                    $form_data->name=$request->name;
                    $form_data->email=$request->email;
                    $form_data->productid=$request->productid;
                    $form_data->comment=$request->comment;
                    $form_data->rating=$request->rating;
                    $form_data->save();
                    return response()->json(['success'=>'Data added successfully!']);
            }
        }
    }


    public function myaccount(){
        $this->AuthLogin();
        $id_acc = Session::get('Id');
        $list_order = order::where('id_acc', $id_acc)->get();
        return view('pages.accounts.my-account', compact('list_order'));
    }
    public function cancelOrder($id){
        $data=DB::table('order')->where('Id', $id)->update([
            "status"=> "Đã huỷ"
        ]);
        return response()->json(['success' => "success"]);
    }

    public function changeDetailsAcc(Request $request, $id){
        $tt = accounts::where('Id', $id)->first();
        $idt = $tt->password;
        if($request->new_pwd && $request->current_pwd && $request->confirm_pwd){
            if(md5($request->current_pwd) != $idt){
                return response()->json(['errorpass' => "errors"]);
            }
            elseif($request->confirm_pwd == $request->new_pwd){
                $dataUpdate=[
                    "name"=>$request->name,
                    "address"=>$request->address,
                    "phone_number"=>$request->phone_number,
                    "Email"=> $request->Email,
                    "password"=> md5($request->new_pwd)
                ];
                $data=accounts::where('Id', $id)
                ->update($dataUpdate);
                return response()->json(['success' => "success"]);
                
            }
            else
                return response()->json(['errornewpass' => "errors"]);
        }
        else{
            $dataUpdate=[
                "name"=>$request->name,
                "address"=>$request->address,
                "phone_number"=>$request->phone_number,
                "Email"=> $request->Email
            ];
            $data=accounts::where('Id', $id)
              ->update($dataUpdate);
            return response()->json(['success' => "success"]);
        }
    }

    public function log_out(){
        $this->AuthLogin();
        Session::put('username',null);
        Session::put('password',null);
        Session::put('Id',null);
        return Redirect::to('/dangnhap-dangky');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function getWishlists(){
        $this->AuthLogin();
        $id_acc = Session::get('Id');
        $data = wishlists::where('id_acc', $id_acc)->select('id_pro')->get();
        return view('pages.wishlists.wishlist', compact('data'));
    }

    public function addtowishlist($id){
        $id_acc = Session::get('Id');
        $data = DB::table('wishlists')->where('id_acc', $id_acc)->select('id_pro')->get();
        $check = true;
        if($id_acc){
            foreach($data as $item){
                if($item->id_pro == $id)
                {
                    $check = false;
                    break;
                }
            }
            if($check)
            {
                $form_data = new wishlists;
                $form_data->id_acc = $id_acc;
                $form_data->id_pro = $id;
                $form_data->save();
                return response()->json(['success' => "success"]);
            }
            else
                return response()->json(['error' => "error"]);
        }
        else{
            return response()->json(['errorlg' => "error"]);
        }
    }

    public function deleteItemWishlist($id){
        $id_acc = Session::get('Id');
        $data = DB::table('wishlists')->where('id_acc', $id_acc)->where('id_pro', $id)->delete();
        return response()->json(['success' => "success"]);
    }

}
