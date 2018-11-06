@extends('layouts.wall')


@section('content')

<h1 style="margin-left: 20px;"> Posts </h1>

<form method="POST" action="{{url('/post/create')}}">
    
    <input  type="submit" name="add" value="Add New Post" class="btn btn-primary" style="float: right;margin-right: 20px;" /> 
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            
    @foreach($posts as $post)
    <!--Post-->
    <div class="post">
        <div class="postContent">
            <h3 class="postAuthor">Author: {{$post->author}}</h3>
            <h3 class="postTitle">Title: {{$post->title}}</h3>
            <p class="postBody">{{$post->body}}</p>
        </div>
        <div class="postCounters">
            <h2 class="postLikes1"></h2>
            <h2 class="postLikes2"></h2>
            <h2 class="postShares"></h2>
        </div>
        
        
    </div>
    <br><br>
    <!--/Post-->
    @endforeach

    
            
    
</form>

@stop
