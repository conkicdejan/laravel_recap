@extends('layouts.api')

@section('title', $book->title)

@section('content')

 <h1>Title:{{ $book->title }}</h1>
 <p>Content:{{ $book->content }}</p>
 <p>Author:{{ $book->user->first_name }}</p>

 <form action="{{ '/books/'. $book->id}}" method="post">
    @csrf
    @method("DELETE")
    <button type='submit'>Delete</button>
 </form>

 <form action="{{ '/books/'. $book->id . '/edit'  }}" method="get">
    @csrf
    <button type='submit'>Edit</button>
 </form>
 @endsection

