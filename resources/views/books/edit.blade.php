@extends('layouts.api')

@section('title', 'Edit book')

@section('content')

<form action="{{ '/books/'. $book->id }}" method="post">
    @csrf
    @method("PUT")
    <label for="title">Title</label>
    <input type="text" name='title' id='title' value="{{ $book->title }}">

    <label for="content">Content</label>
    <input type="text" name='content' id='content' value="{{ $book->content }}">

    <label for="user_id">User Id</label>
    <input type="number" name='user_id' id='user_id' value="{{ $book->user_id }}">

    <button type='submit'>Create</button>

</form>
 @endsection

