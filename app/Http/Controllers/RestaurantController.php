<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
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
    public function store(Request $request): RedirectResponse
    {
        //
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
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
