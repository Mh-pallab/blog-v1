<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog_list = Blog::with('category')->latest()->get(); 
        return view('admin.blog.index', compact('blog_list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category_list = Category::where('status', '1')->get();
        return view('admin.blog.create', compact('category_list'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requested_data=$request->except('image');
    
        //add image
        if($request->hasfile('image')){
            $image_file=$request->image;
            $file_name=mt_rand().'.'.time().'.'.$image_file->extension();
            $image_file->move(public_path('images/blog'),$file_name);
            $requested_data['image']='images/blog/'.$file_name;
        }

        Blog::create($requested_data);
        return to_route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $data['category_list']= Category::where('status', 1)->get();
        $data['blog']= $blog;
        
        return view('admin.blog.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $requested_data=$request->except('image');
    
        if($request->hasfile('image')){
            //remove previous image
            if($blog->image!=''){
                File::delete($blog->image);
            }

            //add new image
            $image_file=$request->image;
            $file_name=mt_rand().'.'.time().'.'.$image_file->extension();
            $image_file->move(public_path('images/blog'),$file_name);
            $requested_data['image']='images/blog/'.$file_name;
        }

        $blog->update($requested_data);
        return to_route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //delete image
        if($blog->image!=''){
            File::delete($blog->image);
        }
        //delete data form database
        $blog->delete();
        return to_route('blog.index');
    }
}
