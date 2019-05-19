<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title= 'Welcome to Laravelm';
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $atct=array(
            'title'=>'About us',
            'wis'=>['wisudal','wisudap']
        );
        return view('pages.about')->with($atct);
    }
}
