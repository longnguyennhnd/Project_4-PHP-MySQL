<?php

namespace App\Http\Controllers;

use Validator;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\productcategories;
use App\themes;
use App\products;
session_start();

class ProductcategoriesController extends Controller
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
        $category = productcategories::all();
        
        $themes = themes::all();
        return view('admin.QLLoaiSP', compact('category', 'themes'));
    }

    public function create(Request $request)
    {
        $this->AuthLogin();
        $validator = Validator::make($request->all(),[
            'category_name' => 'required',
            'themeID' => 'required',
        ],[
            'category_name.required' => "Tên loại sản phẩm không được trống",
            'themeID.required' => "Tên chủ đề không được trống"
        ]);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        else{
            $form_data=new productcategories;
            $form_data->category_name=$request->category_name;
            $form_data->themeID=$request->themeID;
            $form_data->Image= $request->Image;
            $form_data->Note=$request->Note;
            $form_data->save();
            return response()->json(['success'=>'Data added successfully!']);
        }
    }
    public function edit($id)
    {
        $this->AuthLogin();
        if(request()->ajax())
        {
            $data = productcategories::find($id);
            return response()->json(['data' => $data]);
        }
    }
    public function update(Request $request, $Id)
    {
        $this->AuthLogin();
        $validator = Validator::make($request->all(),[
            'category_name' => 'required',
            'themeID' => 'required',
        ],[
            'category_name.required' => "Tên loại sản phẩm không được trống",
            'themeID.required' => "Tên chủ đề không được trống"
        ]);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        else
        {
            $dataUpdate=[
                "category_name"=>$request->category_name,
                "themeID"=>$request->themeID,
                "Note"=>$request->Note,
                "Image"=>$request->Image
            ];
            $data=productcategories::where('id', $Id)
              ->update($dataUpdate);
            return response()->json(['success' => "success"]);
        }
        
    }
    public function delete($id)
    {
        $this->AuthLogin();
        $theloai=products::where('categoryID',$id)->count();
        if($theloai!=0){
            return response()->json(['errors' => "errors"]);
        }
        else{
            $data = productcategories::where('Id', $id)->delete();
            return response()->json(['success' => "success"]);
        }
       
    }
}
