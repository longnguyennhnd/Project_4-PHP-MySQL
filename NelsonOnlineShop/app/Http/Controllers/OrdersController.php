<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use App\orders_detail;
use DB;
use App\OrderDetailViewModel;
use App\OrderViewModel;
use App\products;
use PDF;

class OrdersController extends Controller
{
    public function index(){
        $order = DB::table('order')->get();
        return view('admin.Orders')->with('order', $order);

    }

    public function ViewDetail($id){
        $orders = order::where('Id', $id)->get();
        $orders_detail = orders_detail::where('orderID', $id)->get();
        return view('admin.view_order_detail', compact('orders','orders_detail'));
    }

    public function changeStatus(Request $req, $id ){
        if($req->status){
            $data=DB::table('order')->where('Id', $id)->update([
                "status"=>$req->status
            ]); 
            return response()->json(['success' => "success"]);
        }
        else{
            return response()->json(['errors' => "errors"]);
        }
    }
    public function getPDF($id){
        $data['orders']=order::find($id);
        $data['orders_detail']=orders_detail::where('orderID',$id)->get();
        $pdf= PDF::loadView('admin.PDF', $data);
        return $pdf->download('order.pdf');
    }
 
}
