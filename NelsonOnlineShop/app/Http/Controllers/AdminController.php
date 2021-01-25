<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
Use \Carbon\Carbon;
use App\order;
use App\orders_detail;
use App\accounts;
session_start();

class AdminController extends Controller
{
    public function AuthLogin(){
        $Id = Session::get('Id');
        if($Id){
            return Redirect::to('dashboard');
        }
        else{
            return Redirect::to('admin')->send();
        }
    }
    public function index(){
        return view('admin_login');
    }
    public function show_dashboard(){
        $this->AuthLogin();
        return view('admin.dashboard');
    }
    public function dashboard(Request $request){
        $admin_username = $request->username;
        $admin_password = md5($request->password);
        $result = DB::table('accounts')->where('user_name', $admin_username)->where('for_admin', '1')->where('password', $admin_password)->first();
        if($result){
            Session::put('name',$result->name);
            Session::put('Email',$result->Email);
            Session::put('Id',$result->Id);
            return Redirect::to('/dashboard');
        }
        else
            {
                Session::put('messeges', 'Mật khẩu hoặc tài khoản không đúng!');
                return Redirect::to('/admin');
            }
    }
    public function log_out(){
        $this->AuthLogin();
        Session::put('name',null);
        Session::put('Id',null);
        return Redirect::to('/admin');
    }
    public function statistical(){
        $this->AuthLogin();
        $tongdt = order::whereYear('created_at', 2020)->where('status', "Đã thanh toán")->get();
        $tongdoanhthu = 0;
        if($tongdt){
            foreach($tongdt as $item)
            {
                $tongdoanhthu += $item->total_money;
            }
        }
        
        $dtt1 =order::whereMonth('created_at', 1)->where('status', "Đã thanh toán")->get();
        $dtthang1 =0;
        if($dtt1){
            foreach($dtt1 as $item)
        {
                $dtthang1 += $item->total_money;
                
        }
        }
        
        $dtt2 =order::whereMonth('created_at', 2)->where('status', "Đã thanh toán")->get();
        $dtthang2 = 0;
        if($dtt2){
            foreach($dtt2 as $item)
        {
                $dtthang2 += $item->total_money;
        }
    }
        $dtt3 =order::whereMonth('created_at', 3)->where('status', "Đã thanh toán")->get();
        $dtthang3 = 0;
        if($dtt3){
            foreach($dtt3 as $item)
            {
                    $dtthang3 += $item->total_money;
            }
        }
        
        $dtt4 =order::whereMonth('created_at', 4)->where('status', "Đã thanh toán")->get();
        $dtthang4 = 0;
        if($dtt4){
            foreach($dtt4 as $item)
        {
                $dtthang4 += $item->total_money;
        }
        }
        
        $dtt5 =DB::table('order')->whereMonth('created_at', 5)->where('status', "Đã thanh toán")->get();
        $dtthang5 =0;
        if($dtt5){
            foreach($dtt5 as $item)
        {
            $dtthang5 += $item->total_money;
        }
        }
        
        
        $dtt6 =order::whereMonth('created_at', 6)->where('status', "Đã thanh toán")->get();
        $dtthang6 = 0;
        if($dtt6){
            foreach($dtt6 as $item)
        {
                $dtthang6 += $item->total_money;
        }
        }
        
        $dtt7 =order::whereMonth('created_at', 7)->where('status', "Đã thanh toán")->get();
        $dtthang7 = 0;
        if($dtt7){
            foreach($dtt7 as $item)
        {
                $dtthang7 += $item->total_money;
        }
        }
        
        $dtt8 =order::whereMonth('created_at', 8)->where('status', "Đã thanh toán")->get();
        $dtthang8 = 0;
        if($dtt8){
            foreach($dtt8 as $item)
            {
                    $dtthang8 += $item->total_money;
            }
        }
        
        $dtt9 =order::whereMonth('created_at', 9)->where('status', "Đã thanh toán")->get();
        $dtthang9 = 0;
        if($dtt9){
            foreach($dtt9 as $item)
        {
                $dtthang9 += $item->total_money;
        }
        }
        
        $dtt10 =order::whereMonth('created_at', 10)->where('status', "Đã thanh toán")->get();
        $dtthang10 = 0;
        if($dtt10){
            foreach($dtt10 as $item)
            {
                    $dtthang10 += $item->total_money;
            }
        }
       
        $dtt11 =order::whereMonth('created_at', 11)->where('status', "Đã thanh toán")->get();
        $dtthang11 = 0;
        if($dtt11){
            foreach($dtt11 as $item)
            {
                $dtthang11 += $item->total_money;
            }
        }
        
        $dtt12 =order::whereMonth('created_at', 12)->where('status', "Đã thanh toán")->get();
        $dtthang12 = 0;
        if($dtt12){
            foreach($dtt12 as $item)
            {
                $dtthang12 += $item->total_money;
            }
        }
        

        $tongsanpham1 = orders_detail::whereYear('created_at', 2020)->get();
        $tongsanpham = 0;
        
        foreach($tongsanpham1 as $item)
        {
            $tongsanpham += $item->quantity;
        }
        $spt1 =orders_detail::whereMonth('created_at', 1)->get();
        $spthang1 =0;
        foreach($spt1 as $item)
        {
                $spthang1 += $item->quantity;
                
        }
        $spt2 =orders_detail::whereMonth('created_at', 2)->get();
        $spthang2 = 0;
        foreach($spt2 as $item)
        {
                $spthang2 += $item->quantity;
        }
        
        $spt3 =orders_detail::whereMonth('created_at', 3)->get();
        $spthang3 = 0;
        foreach($spt3 as $item)
        {
                $spthang3 += $item->quantity;
        }
        $spt4 =orders_detail::whereMonth('created_at', 4)->get();
        $spthang4 = 0;
        foreach($spt4 as $item)
        {
                $spthang4 += $item->quantity;
        }
        $spt5 =DB::table('orders_detail')->whereMonth('created_at', 5)->get();
        $spthang5 =0;
        foreach($spt5 as $item)
        {
                $spthang5 += $item->quantity;
                
        }
        
        $spt6 =orders_detail::whereMonth('created_at', 6)->get();
        $spthang6 = 0;
        foreach($spt6 as $item)
        {
                $spthang6 += $item->quantity;
        }
        $spt7 =orders_detail::whereMonth('created_at', 7)->get();
        $spthang7 = 0;
        foreach($spt7 as $item)
        {
                $spthang7 += $item->quantity;
        }
        $spt8 =orders_detail::whereMonth('created_at', 8)->get();
        $spthang8 = 0;
        foreach($spt8 as $item)
        {
                $spthang8 += $item->quantity;
        }
        $spt9 =orders_detail::whereMonth('created_at', 9)->get();
        $spthang9 = 0;
        foreach($spt9 as $item)
        {
                $spthang9 += $item->quantity;
        }
        $spt10 =orders_detail::whereMonth('created_at', 10)->get();
        $spthang10 = 0;
        foreach($spt10 as $item)
        {
                $spthang10 += $item->quantity;
        }
        $spt11 =orders_detail::whereMonth('created_at', 11)->get();
        $spthang11 = 0;
        foreach($spt11 as $item)
        {
                $spthang11 += $item->quantity;
        }
        $spt12 =orders_detail::whereMonth('created_at', 12)->get();
        $spthang12 = 0;
        foreach($spt12 as $item)
        {
                $spthang12 += $item->quantity;
        }

        $tonghoadontrongnam = order::whereYear('created_at', 2020)->count();
        $thang1 = order::whereMonth('created_at', 1)->count();
        $thang2 = order::whereMonth('created_at', 2)->count();
        $thang3 = order::whereMonth('created_at', 3)->count();
        $thang4 = order::whereMonth('created_at', 4)->count();
        $thang5 = order::whereMonth('created_at', 5)->count();
        $thang6 = order::whereMonth('created_at', 6)->count();
        $thang7 = order::whereMonth('created_at', 7)->count();
        $thang8 = order::whereMonth('created_at', 8)->count();
        $thang9 = order::whereMonth('created_at', 9)->count();
        $thang10 = order::whereMonth('created_at', 10)->count();
        $thang11 = order::whereMonth('created_at', 11)->count();
        $thang12 = order::whereMonth('created_at', 12)->count();

        $tongthanhvientrongnam = accounts::whereYear('created_at', 2020)->where('for_admin', 0)->count();
        $tvthang1 = accounts::whereMonth('created_at', 1)->where('for_admin', 0)->count();
        $tvthang2 = accounts::whereMonth('created_at', 2)->where('for_admin', 0)->count();
        $tvthang3 = accounts::whereMonth('created_at', 3)->where('for_admin', 0)->count();
        $tvthang4 = accounts::whereMonth('created_at', 4)->where('for_admin', 0)->count();
        $tvthang5 = accounts::whereMonth('created_at', 5)->where('for_admin', 0)->count();
        $tvthang6 = accounts::whereMonth('created_at', 6)->where('for_admin', 0)->count();
        $tvthang7 = accounts::whereMonth('created_at', 7)->where('for_admin', 0)->count();
        $tvthang8 = accounts::whereMonth('created_at', 8)->where('for_admin', 0)->count();
        $tvthang9 = accounts::whereMonth('created_at', 9)->where('for_admin', 0)->count();
        $tvthang10 = accounts::whereMonth('created_at', 10)->where('for_admin', 0)->count();
        $tvthang11 = accounts::whereMonth('created_at', 11)->where('for_admin', 0)->count();
        $tvthang12 = accounts::whereMonth('created_at', 12)->where('for_admin', 0)->count();
        return view('admin.statistical', compact('tongdoanhthu','dtthang1','dtthang2','dtthang3','dtthang4','dtthang5','dtthang6','dtthang7','dtthang8','dtthang9','dtthang10','dtthang11','dtthang12','tongsanpham','spthang1', 'spthang2', 'spthang3', 'spthang4', 'spthang5', 'spthang6', 'spthang7', 'spthang8', 'spthang9', 'spthang10', 'spthang11', 'spthang12','thang1','tonghoadontrongnam', 'thang2', 'thang3', 'thang4', 'thang5', 'thang6', 'thang7', 'thang8', 'thang9', 'thang10', 'thang11', 'thang12', 'tvthang1','tvthang2','tvthang3','tvthang4','tvthang5','tvthang6','tvthang7','tvthang8','tvthang9','tvthang10','tvthang11','tvthang12', 'tongthanhvientrongnam'));
    }

    public function ThongkeDoanhthuTheothang(Request $req){
        $this->AuthLogin();
        $month = $req->month;
        $mon = Carbon::parse($month)->format('m/Y');
        $data = order::where('created_at', 'like', "%$month%")->where('status', "Đã thanh toán")->get();
        $doanhthu = 0;
        if($data){
            foreach($data as $item){
                $doanhthu += $item->total_money;
            }
        }
        return view('admin.changeMonth', compact('data', 'doanhthu', 'mon'));
    }

    public function thongkedoanhthu(Request $req){
        $this->AuthLogin();
        $date = $req->date;
        $fmdate = Carbon::parse($date)->format('d/m/Y');
        $data = order::where('created_at', 'like', "%$date%")->where('status', "Đã thanh toán")->get(); 
        $doanhthu = 0;
        if($data){
            foreach($data as $item){
                $doanhthu += $item->total_money;
            }
        }
        return view('admin.change-stat', compact('data', 'doanhthu', 'fmdate'));
        
    }
}
