@extends('layout.app')

@section('title')
    Restaurant | {{ $restaurant->name }}
@endsection

@section('content')
    <h1>{{ $restaurant->name }}</h1>
    <p> {{ $restaurant->description }}</p>
    <address>{{ $restaurant->address}},{{ $restaurant->zipCode }} {{ $restaurant->town }} {{ $restaurant->country }}</address>
@endsection