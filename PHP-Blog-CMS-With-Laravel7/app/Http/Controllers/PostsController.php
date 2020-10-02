<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Posts::all();
        return view('posts');
    }

    public function show($id){
        $post = Posts::find($id);
        $posts = Posts::all();
        return view();
    }
}
