<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogData = Blog::all();
        return view('adminBlog', compact('blogData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'src' => "required",
            'day' => "required",
            'month_and_year' => "required",
            'titre' => "required",
            'texte' => "required",
            'user_id' => "required",
        ]);

        $newBlog = new Blog;
        $newBlog->src = $request->src;
        $newBlog->day = $request->day;
        $newBlog->month_and_year = $request->month_and_year;
        $newBlog->titre = $request->titre;
        $newBlog->texte = $request->texte;
        $newBlog->user_id = $request->user_id;
        $newBlog->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editBlog = Blog::find($id);
        return view('adminBlogEdit', compact('editBlog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateBlog = Blog::find($id);
        $updateBlog->src = $request->src;
        $updateBlog->day = $request->day;
        $updateBlog->month_and_year = $request->month_and_year;
        $updateBlog->titre = $request->titre;
        $updateBlog->texte = $request->texte;
        $updateBlog->user_id = $request->user_id;
        $updateBlog->save();
        return redirect('/adminBlog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteBlog = Blog::find($id);
        $deleteBlog->delete();
        return redirect('/adminBlog');
    }
}
