@extends('layout.app')

@section('title', 'Create a new restaurant')

@section('content')
    <h1>Create a new restaurant</h1>
    
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

    <form method="post" action="/restaurants/create">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="address">Address</label>
            <input type="text" name="address" id="address">
        </div>
        <div>
            <label for="zipCode">Zip code</label>
            <input type="number" name="zipCode" id="zipCode" min="0">
        </div>
        <div>
            <label for="town">Town</label>
            <input type="text" name="town" id="town">
        </div>

        <div>
            <label for="country">Country</label>
            <input type="text" name="country" id="country">
        </div>

        <div>
            <label for="review">Review</label>
            <input type="number" name="review" id="number" min="0">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <input type="submit" value="submit">
    </form>
@endsection