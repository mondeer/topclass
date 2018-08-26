<?php

namespace topclass\Http\Controllers;

use Illuminate\Http\Request;
use topclass\Blog;
use Sentinel;

class BlogCtrl extends Controller
{
    public function index(){
      return view('topclass.newblog');
    }

    public function postCreate(Request $request) {
      $author = Sentinel::getUser()->first_name;
      $blog = new Blog;
      $blog->title = $request->input('title');
      $blog->author = $author;
      $blog->content = $request->input('content');
      $blog->save();

      return redirect('/topclass/adminblogs');
    }

    public function show() {
      $blogs = Blog::all();

      return view('viewblogs')->with('blogs', $blogs);
    }

    public function adminBlogs() {
      $bloggs = Blog::all();

      return view('topclass.adminblogs')->with('bloggs', $bloggs);
    }

    public function showblog($id) {
      $blog = Blog::FindOrFail($id);

      return view('viewblog', compact('blog'));
    }
}
