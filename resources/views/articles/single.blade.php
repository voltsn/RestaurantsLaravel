@extends('layout.app')

@section('title')
    {{ $article->title }}
@endsection

@section('content')
    <h2>{{ $article->title }} <strong>(Artilce created by {{ $article->author }})</strong></h2>
    <p>{{ $article->content }} </p>
@endsection