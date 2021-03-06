@extends('layouts.wall')


@section('content')

<h1 style="margin-left: 20px;"> Posts </h1>

<form method="POST" action="{{url('/post/create')}}">
    
    <input  type="submit" name="add" value="Add New Post" class="btn btn-primary" style="float: right;margin-right: 20px;" /> 
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            
    @foreach($posts as $post)
    <!--Post-->
    <div class="post" style="margin-left:50px;width: 1000px;
    border: 15px solid #CB4335;padding: 25px;margin: 25px;">
        <div class="postContent">
            <h3 class="postAuthor">Author: {{$post->author}}</h3>
            <h3 class="postTitle">Title: {{$post->title}}</h3>
            <p class="postBody" style="font-size:22px;">{{$post->body}}</p>
        </div>
        <div class="postCounters" style="margin-left:50px;width: 300px;height: 50px;
    border: 5px solid #CB4335;margin: 2px;">
            <h4 class="postLikes1" style="display:inline-block;margin-left: 10px;">{{$post->likes1}}</h4>
            <i class="em em---1" style="display:inline-block;margin-left:10px;" ></i>
            
            <h4 class="postLikes2" style="display:inline-block;margin-left:50px;">{{$post->likes2}}</h4>
            <i class="em em-laughing" style="display:inline-block;margin-left:10px;"></i>
            
            <h4 class="postShares" style="display:inline-block;margin-left:50px;"></h4>
            <i class="em em-arrows_clockwise" style="display:inline-block;margin-left:10px;"></i>
        </div>
        
        <div class="postComments" style="margin-left:50px;width: 900px;
    border: 5px solid #CB4335;margin: 2px;">
            
            <div class="postComment">
                <h3 class="commentAuthor" style="margin-left:10px;">Comment Author: </h3>
                <p class="commentBody" style="margin-left:10px;">Comment Body</p>
            </div>
            
        </div>
        
    </div>
    <br><br>
    <!--/Post-->
    @endforeach

    
            
    
</form>

@stop
