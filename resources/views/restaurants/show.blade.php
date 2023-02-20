@extends('layout.app')

@section('title', 'Show restaurant')

@section('content')
    <h1>Single Restaurant page</h1>
    <p>Currently displaying restaurant with an id of {{ $id }}</p>
@endsection