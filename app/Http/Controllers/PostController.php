<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return \view('posts.list',compact('posts'));
    }

    public function create()
    {
        return \view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->content = $request['content'];
        $post->title = $request['title'];
        $post->save();
        return redirect()->route('posts.list');
    }
}
