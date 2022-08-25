@extends('layouts.api')

@section('title', $post->title)

@section('content')

 <h1>Title:{{ $post->title }}</h1>
 <p>Content:{{ $post->content }}</p>
 <p>Author:{{ $post->user->name }}</p>

 <form action="{{ '/posts/'. $post->id}}" method="post">
    @csrf
    @method("DELETE")
    <button type='submit'>Delete</button>
 </form>

 <form action="{{ '/posts/'. $post->id . '/edit'  }}" method="get">
    @csrf
    <button type='submit'>Edit</button>
 </form>
 @endsection