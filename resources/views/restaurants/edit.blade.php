@extends('layout.app')

@section('title')
    Edit | {{ $restaurant->name }}
@endsection

@section('content')
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <form method="post" action="/restaurants/edit/{{ $restaurant->id }}">
        @csrf
        @method('PATCH')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $restaurant->name }}">
            @if ($errors->has('name'))
                <p>{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="{{ $restaurant->address }}">
            @if ($errors->has('address'))
                <p>{{ $errors->first('address') }}</p>
            @endif
        </div>
        <div>
            <label for="zipCode">Zip code</label>
            <input type="number" name="zipCode" id="zipCode" min="0" value="{{ $restaurant->zipCode }}">
            @if ($errors->has('zipCode'))
                <p>{{ $errors->first('zipCode') }}</p>
            @endif
        </div>
        <div>
            <label for="town">Town</label>
            <input type="text" name="town" id="town" value="{{ $restaurant->town }}">
            @if ($errors->has('town'))
                <p>{{ $errors->first('town') }}</p>
            @endif
        </div>

        <div>
            <label for="country">Country</label>
            <input type="text" name="country" id="country" value="{{ $restaurant->country }}">
            @if ($errors->has('country'))
                <p>{{ $errors->first('country') }}</p>
            @endif
        </div>

        <div>
            <label for="review">Review</label>
            <input type="number" name="review" id="number" min="0" value="{{ $restaurant->review }}">
            @if ($errors->has('review'))
                <p>{{ $errors->first('review') }}</p>
            @endif
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10">{{ $restaurant->description }}</textarea>
            @if ($errors->has('description'))
            <p>{{ $errors->first('description') }}</p>
            @endif
        </div>

        <input type="submit" value="submit">
    </form>
@endsection