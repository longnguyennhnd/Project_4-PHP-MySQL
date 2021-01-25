<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use Validator;
use App\productcategories;
use Illuminate\Support\Facades\Redirect;
use App\sanphamExport;
use App\suppliers;
use DB;
use Session;

class ProductsController extends Controller
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
        $this->AuthLogin();
        $products = products::orderBy('Id', 'DESC')->get();
        $categories = productcategories::all();
        $suppliers = suppliers::all();
        return view('admin.Products', compact('products', 'categories', 'suppliers'));
    }
    
    public function change_show_on_home($id) {
        $this->AuthLogin();
        $product = products::find($id);
        $current_show_on_home = $product->Show_on_home;
        $new_show_on_home = ($current_show_on_home + 1) % 2;
        $product->Show_on_home = $new_show_on_home;
        $res = $product->save();
        if($res)
            return redirect()->back();
    }

    public function changeStatus($id) {
        $this->AuthLogin();
        $product = products::find($id);
        $current_status = $product->Discontinue;
        $new_status = ($current_status + 1) % 2;
        $product->Discontinue = $new_status;
        if($new_status == 1){
            $product->Show_on_home = 0;
        }
        $res = $product->save();
        if($res)
            return redirect()->back();
    }

    public function create(Request $request)
    {
        $this->AuthLogin();
        $validator = Validator::make($request->all(),[
            'ProductName' => 'required',
            'Price' => 'required',
            'Quantity' => 'required',
            'Image' => 'required',
        ],[
            'ProductName.required' => "Tên sản phẩm không được trống",
            'Quantity.required' => "Số lượng không được trống",
            'Image.required' => "Hình ảnh không được trống",
            'Price.required' => "Giá không được trống"
        ]);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        else{
            $form_data=new products;
            $form_data->ProductName=$request->ProductName;
            $form_data->categoryID=$request->categoryID;
            $form_data->SupplierID=$request->SupplierID;
            $form_data->Price= $request->Price;
            $form_data->Sale_price= $request->Sale_price;
            $form_data->Date_sale= $request->Date_sale;
            $form_data->Quantity=$request->Quantity;
            $form_data->more_image=$request->more_image;
            $form_data->Image=$request->Image;
            $form_data->description=$request->description;
            $form_data->color = $request->color;
            $form_data->size = $request->size;
            $form_data->material = $request->material;
            $form_data->upholstery_material = $request->upholstery_material;
            $form_data->Show_on_home = 0;
            $form_data->Discontinue = 0;
            $form_data->save();
            return response()->json(['success'=>'Data added successfully!']);
        }
    }
    public function edit($id)
    {
        $this->AuthLogin();
        if(request()->ajax())
        {
            $data = products::find($id);
            $images = json_decode($data->more_image);
            return response()->json([
                'data' => $data,
                'images'=>$images
                ]);
        }
    }
    public function update(Request $request, $Id)
    {
        $this->AuthLogin();
        $validator = Validator::make($request->all(),[
            'ProductName' => 'required',
            'Price' => 'required',
            'Quantity' => 'required',
            'Image' => 'required',
        ],[
            'ProductName.required' => "Tên sản phẩm không được trống",
            'Quantity.required' => "Số lượng không được trống",
            'Image.required' => "Hình ảnh không được trống",
            'Price.required' => "Giá không được trống"
        ]);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        else{
            $dataUpdate=[
                "ProductName"=>$request->ProductName,
                "categoryID"=>$request->categoryID,
                "SupplierID"=>$request->SupplierID,
                "Price"=> $request->Price,
                "Sale_price"=> $request->Sale_price,
                "Quantity"=>$request->Quantity,
                "more_image"=>$request->more_image,
                "Date_sale"=>$request->Date_sale,
                "Image"=>$request->Image,
                "description"=>$request->description
            ];
            $data=products::where('Id', $Id)
              ->update($dataUpdate);
            return response()->json(['success' => "success"]);
        }
    }
    public function delete($id)
    {
        $this->AuthLogin();
        $data = products::where('Id', $id)->delete();
        return response()->json(['success' => "success"]);
    }

    public function exportExcel() 
    {
        return Excel::download(new sanphamExport, 'Export Data.xlsx');
    }
    public function exportCSV() 
    {
        return Excel::download(new sanphamExport, 'Export Data.xls');
    }
}
