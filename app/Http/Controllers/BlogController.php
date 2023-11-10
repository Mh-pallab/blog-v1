<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog_list = Blog::all(); 
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
        Blog::create($request->all());
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
        $blog->update($request->all());
        return to_route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return to_route('blog.index');
    }
}
