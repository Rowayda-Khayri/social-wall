<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
        
    }
    
    public function create(){
        
    }
    
    public function store(Request $request){
        
        //create a new post
        $post = new Post();
        
        $post->title = $request->title;
        $post->body = $request->body;
        $post->author = $request->author;
        $post->pinned = 0;
        
        $post->save();
        
    }
    
    public function like1($id){
        
    }
    
    public function like2($id){
        
    }
    
    public function comment(Request $request, $id){
        
    }
    
    public function share($id){
        
    }
    
}
