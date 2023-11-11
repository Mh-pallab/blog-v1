<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
   {
      $blogs = Blog::with('category')->get();
      return view('home', compact('blogs'));
   }

   public function readmore(Blog $blog)
   {
      return view('frontend.readmore', compact('blog'));
   }
}
