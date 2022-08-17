<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {  $posts = Post::all();
        return view('welcome', compact('posts'));
    }

    public function store(Request $request){
        $store = new Post;
        $store->title = $request->title;
        $store->body = $request->body;
        $store->save();
        return redirect('/')->with('success','Post Created');
    }
    public function view(){
        $posts = Post::all();
        return view('show', compact('posts'));
    }
}
