@extends('layout.app')

@section('title')
    Edit | {{ $article->title }}
@endsection

@section('content')
    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif
    <form method="post" action="/articles/edit/{{ $article->id }}">
        @csrf
        @method('PATCH')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $article->title }}">
            @if ($errors->has('title'))
                <p>{{ $errors->first('title') }}</p>
            @endif
        </div>

        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10">{{ $article->content }}</textarea>
            @if ($errors->has('content'))
                <p>{{ $errors->first('content') }}</p>
            @endif
        </div>

        <div>
            <label for="author">Author</label>
            <input type="text" name="author" id="author" value="{{ $article->author }}">
            @if ($errors->has('author'))
                <p>{{ $errors->first('author') }}</p>
            @endif
        </div>

        <input type="submit" value="edit">
    </form>
@endsection