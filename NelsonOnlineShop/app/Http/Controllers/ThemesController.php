<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemesController extends Controller
{
    // public function index(){
    //     $themes = themes::all();
    //     return view('admin.QLLoaiSP', compact('themes'));
    // }
    public function show_themes(){
        return view('pages.theme.show_theme');
    }
}
