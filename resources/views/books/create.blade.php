@extends('layouts.api')

@section('title', 'Create new book')

@section('content')


@if (isset($book))
    <form action="{{ '/books/'. $book->id }}" method="post">
    @method("PUT")
@else
    <form action="/books" method="post">
@endif

    @csrf

    <label for="title">Title</label>
    <input type="text" name='title' id='title' value="{{ isset($book) ? $book->title : ''}}">

    <label for="content">Content</label>
    <input type="text" name='content' id='content' value="{{ isset($book) ? $book->content : ''}}">

    <label for="user_id">User Id</label>
    <input type="number" name='user_id' id='user_id' value="{{ isset($book) ? $book->user_id : ''}}">

    <button type='submit'>{{ isset($book) ? "Edit" : "Create"}}</button>

</form>
 @endsection

