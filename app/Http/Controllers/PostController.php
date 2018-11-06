<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        
        $pinnedPost = Post::where('pinned',1);
        
        $posts = Post::orderBy('created_at', 'desc')->get();
        
//        $comments = array();
//        
//        foreach ($posts as $post){
//            for($i = 0; $i<count($posts);$i++){
//                $comment = array();
//                foreach ($post->comments() as $c){
////                    dd($post->comments());
//                    array_push($comment, $c);
//                }
//                array_push($comments, $comment);
//                
//            }
//            
//        }
//        $comment = $posts[0]->comments()->first();
//        dd($pinnedPost);
//        return $comments[3];
        return view('wall', compact('pinnedPost', 'posts'));
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
        
        $comments = array();
        foreach ($request->comments as $rc){
//            return $comment['author'];
            $comment = new Comment();
            $comment->author = $rc['author']; 
            $comment->body = $rc['body']; 
            $comment->save();
            $post->comments()->save($comment);
//            array_push($comments, $comment);
        }
        $post->comments()->save($comments);
//        return $request->comments;
        
        
        
        
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
