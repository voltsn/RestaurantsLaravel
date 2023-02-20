@extends('layout.app')

@section('title', 'Restaurants')

@section('content')
    <h1>Restaurants listing</h1>
    @foreach($restaurants as $restaurant)
        <div>
            <h2>id: {{ $restaurant->id }} | {{ $restaurant->name }} | rating: {{ $restaurant->review }}/5</h2>
            <p>{{ $restaurant->description }}</p>
            <address>{{ $restaurant->address}},{{ $restaurant->zipCode }} {{ $restaurant->town }} {{ $restaurant->country }}</address>
            <p> Created at {{ $restaurant->created_at }} </p>
            <p> Last updated at {{ $restaurant->updated_at }} </p>
        </div>
    @endforeach
@endsection