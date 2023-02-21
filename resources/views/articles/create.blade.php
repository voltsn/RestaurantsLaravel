@extends('layout.app')

@section('title', 'Articles | Create New Article')

@section('content')
    @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <form method="POST" action="/article/create">
        @csrf
        <label for="title">Title of the article</label>
        <input type="text" name="title" id="title">

        <br>

        <label for="content">Content</label>
        <textarea id="content" name="content"></textarea>
        
        <br>

        <label for="author">Author</label>
        <input id="author" name="author" type="text">

        <br>
        
        <input type="submit" value="Submit"></input> 
    </form>
@endsection