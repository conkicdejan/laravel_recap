@extends('layouts.api')

@section('title', 'Posts')

@section('content')

 <h1>Posts</h1>
 @foreach ($posts as $post)
 <p>Title:{{ $post->title }}</p>
 <p>Content:{{ $post->content }}</p>
 <p>Author:{{ $post->user->name }}</p>
     <hr>
 @endforeach

 @endsection