@extends('layouts.api')

@section('title', 'Create new book')

@section('content')

<form action="/books" method="post">
    @csrf

    <label for="title">Title</label>
    <input type="text" name='title' id='title'>

    <label for="content">Content</label>
    <input type="text" name='content' id='content'>

    <label for="user_id">User Id</label>
    <input type="number" name='user_id' id='user_id'>

    <button type='submit'>Create</button>

</form>
 @endsection

