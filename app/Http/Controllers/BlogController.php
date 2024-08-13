<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Blog;
use App\Models\Profile;
use Illuminate\Http\JsonResponse;


class BlogController extends Controller
{
    public function blogDetail($id)
    {
        $blogdetail = Blog::findOrFail($id);
        $adminBlogs = Blog::all();

        $shareComponent = \Share::page(
            url('/'),
            'Here is our Blog'
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram();

        return view('/pages/detailBlogs', compact('blogdetail', 'shareComponent', 'adminBlogs'));
    }
    
    public function blog()
    {
        $petblog = Blog::all(); // Fetch all blog posts
        $posts = Profile::all();
    
        return view('pages.blogPage', [
            'petblog' => $petblog,
            'post' => $posts, 
        ]);
    }
    

    public function index()
    {
        $blogs = Blog::all();
        return view('admin/adminDashboard/blogs/index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/adminDashboard/blogs/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $nameImage = time(). '.' .$request->images->extension();  
        $request->images->move(public_path('/blogs'), $nameImage);

        $blogs = new Blog([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'images' => $nameImage,
        ]);
        $blogs->save();
        return redirect('admin/adminDashboard/blogs/index')->with('success', 'Blogs added successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blogs = Blog::find($id);
        return view('admin/adminDashboard/blogs/show', ['blogs' => $blogs]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blogs = Blog::find($id);
        return view('admin/adminDashboard/blogs/update', ['blogs' => $blogs]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        $blogs = Blog::find($id);
        
        $blogs->title = $request->input('title');
        $blogs->content = $request->input('content');
        
        if ($request->hasFile('image')) {
            $nameImage = time().'.'.$request->image->extension();  
            $request->image->move(public_path('/blogs'), $nameImage);
            $blogs->images = $nameImage;
        }
    
        $blogs->save();
    
        return redirect('/admin/adminDashboard/blogs/index')->with('flash_message', 'Update successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        blog::destroy($id);
        return redirect('/admin/adminDashboard/blogs/index')->with('flash_message', 'blog Deleted!');
    }
    
    public function view($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->views++;
        $blog->save();
        return back()->with('success', 'Blog viewed successfully!');
    }   
}