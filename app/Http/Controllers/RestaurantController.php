<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Http\Requests\CreateRestaurantPostRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('restaurants.index', ['restaurants' => Restaurant::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('restaurants.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRestaurantPostRequest $request): RedirectResponse
    {
        $request->validated();

        // Insert into the database
        Restaurant::create([
            'name' => $request['name'],
            'address' => $request['address'],
            'zipCode' => $request['zipCode'],
            'town' => $request['town'],
            'country' => $request['country'],
            'description' => $request['description'],
            'review' => $request['review'],
        ]);

        return redirect('/restaurants/create')->with('status', 'Restaurant created successfully');
    }

    /**
     * Display the specified resource.ss
     */
    public function show(Restaurant $restaurant): View
    {
       return view('restaurants.show', ['restaurant' => $restaurant]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant): View
    {
        return view('restaurants.edit', ['restaurant' => $restaurant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateRestaurantPostRequest $request, Restaurant $restaurant): RedirectResponse
    {
        $request->validated();

        // Update record in the database
        $restaurant->name = $request['name'];
        $restaurant->address = $request['address'];
        $restaurant->zipCode = $request['zipCode'];
        $restaurant->town = $request['town'];
        $restaurant->country = $request['country'];
        $restaurant->review = $request['review'];
        $restaurant->description = $request['description'];

        $restaurant->save();

        return redirect('/restaurants/edit/'.$restaurant->id)->with('status', $restaurant->name.' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
