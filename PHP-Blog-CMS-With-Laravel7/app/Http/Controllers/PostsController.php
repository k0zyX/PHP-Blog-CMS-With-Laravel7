<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Posts::select('*')
                        ->take(3)
                        ->orderBy('id', 'desc')
                        ->get();
        
        return view('posts',['posts' => $posts]);
    }

    public function show($id){
        $post = Posts::where('id', $id)
        ->first();
        return view('postshow',['post' => $post]);
    }
    public function allPosts(){
        $post = Posts::all();
        return view('allposts',['post' => $post]);
    }
}
