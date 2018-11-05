<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function store(Request $request){
        
        //create a new post
        $post = new Post();
        
        $post->title = $request->title;
        $post->body = $request->body;
        $post->author = $request->author;
        $post->likes1 = 0;
        $post->likes2 = 0;
        $post->shares = 0;
        
        $post->save();
        
    }
}
