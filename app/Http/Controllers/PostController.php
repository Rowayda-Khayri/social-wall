<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        
        $pinnedPost = Post::where('pinned',1);
        
        $posts = Post::orderBy('created_at', 'desc')->get();
        
        
        return view('wall', compact('pinnedPost', 'posts', 'comments'));
    }
    
    public function create(){
        
        return view('posts.create');
    }
    
    public function store(Request $request){
        
        //create a new post
        $post = new Post();
        
        $post->title = $request->title;
        $post->body = $request->body;
        $post->author = $request->author;
        $post->pinned = 0;
        
        $post->save();
        
        return redirect('/wall');
        
    }
    
    public function like1($id){
        
        Post::find("$id")->increment('likes1');
        
    }
    
    public function like2($id){
        
        Post::find("$id")->increment('likes2');
    }
    
    public function comment(Request $request, $id){
        
        DB::collection('posts')->where('_id', $id)->push('comments', ['author' => $request->author, 'body' => $request->comment]);
    }
    
    public function share($id){
        
    }
    
}
