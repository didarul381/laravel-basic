<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{

      public $allBlogs;
   public function home(){
     $this->allBlogs = Blog::getAllBlogs();
    return view('home',['data'=>$this->allBlogs]);
   }

   public function about(){
    return view('about');
   }
   public function service(){
    return view('service');
   }
   public function contact(){
    return view('contact');
   }
}
