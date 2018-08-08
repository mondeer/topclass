<?php

namespace topclass\Http\Controllers;

use Illuminate\Http\Request;
use topclass\Blog;
use topclass\Sentinel;

class BlogCtrl extends Controller
{
    public function index(){
      return view('newblog');
    }

    public function postCreate(Request $request) {
      $author = Auth::user()->name;
      $blog = new Blog;
      $blog->title = $request->input('title');
      $blog->author = $author;
      $blog->content = $request->input('content');
      $blog->save();

      return redirect('/topblogs');
    }

    public function show() {
      $blogs = Blog::all();

      return view('viewblogs')->with('blogs', $blogs);
    }

    public function showblog($id) {
      $blog = Blog::FindOrFail($id);

      return view('viewblog', compact('blog'));
    }
}
