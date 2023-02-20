@extends('layout.app')

@section('title', 'Articles | Create New Article')

@section('content')
    <form method="POST" action="/article/create">
        @csrf
        <label for="title">Title of the article</label>
        <input type="text" name="title" id="title">
        <input type="submit" value="Submit"></input> 
    </form>
@endsection