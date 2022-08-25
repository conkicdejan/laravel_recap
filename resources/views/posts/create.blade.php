@extends('layouts.api')

@section('title', 'Create new post')

@section('content')

@if (isset($post))
    <form action="{{ '/posts/'. $post->id }}" method="post">
    @method("PUT")
@else
    <form action="/posts" method="post">
@endif
    @csrf

    <label for="title">Title</label>
    <input type="text" name='title' id='title' value="{{ isset($post) ? $post->title : ''}}">

    <label for="content">Content</label>
    <input type="text" name='content' id='content' value="{{ isset($post) ? $post->content : ''}}">

    <label for="user_id">User Id</label>
    <input type="number" name='user_id' id='user_id' value="{{ isset($post) ? $post->user_id : ''}}">

    <button type='submit'>{{ isset($post) ? "Edit" : "Create"}}</button>

</form>
 @endsection