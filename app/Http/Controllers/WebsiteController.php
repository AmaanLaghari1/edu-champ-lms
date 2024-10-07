<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home(){
        return view('index');
    }
    
    public function about(){
        return view('website.about');
    }
    
    public function courses(){
        return view('website.courses');
    }
    
    public function blog(){
        return view('website.blog');
    }
    
    public function contact(){
        return view('website.contact');
    }

}
