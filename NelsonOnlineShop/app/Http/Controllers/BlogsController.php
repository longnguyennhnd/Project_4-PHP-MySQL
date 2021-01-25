<?php

namespace App\Http\Controllers;

use App\blogs;
use DB;
use Session;
use Validator;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(){
        $blogs = blogs::all();
        return view('admin.Blogs', compact('blogs'));
    }
    public function change_show_on_home($id) {
        $blog = blogs::find($id);
        $current_show_on_home = $blog->Show_on_home;
        $new_show_on_home = ($current_show_on_home + 1) % 2;
        $blog->Show_on_home = $new_show_on_home;
        $res = $blog->save(); 
        if($res)
            return redirect()->back();
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'image' => 'required',
        ],[
            'title.required' => "Tiêu đề bài viết không được trống",
            'image.required' => "Hình ảnh không được trống",
        ]);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        else{
            $form_data=new blogs;
            $form_data->title=$request->title;
            $form_data->image=$request->image;
            $form_data->more_image=$request->more_image;
            $form_data->paragraph_1=$request->paragraph_1;
            $form_data->paragraph_2=$request->paragraph_2;
            $form_data->Show_on_home = 0;
            // dd($form_data);
            $form_data->save();
            return response()->json(['success'=>'Data added successfully!']);
        }
    }

}
