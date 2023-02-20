@extends('layout.app')

@section('title', 'Articles Listing')

@section('content')
    @foreach($articles as $article)
        <h2>{{ $article->title }} <strong>(Article created by {{ $article->author }})</strong></h2>
        <p>{{ $article->content }}</p>
    @endforeach
@endsection