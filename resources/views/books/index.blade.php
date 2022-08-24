@extends('layouts.api')

@section('title', 'Books')

@section('content')

 <h1>Books</h1>
 @foreach ($books as $book)
 <p>Title:{{ $book->title }}</p>
 <p>Content:{{ $book->content }}</p>
 <p>Author:{{ $book->user->first_name }}</p>
     <hr>
 @endforeach

 @endsection

