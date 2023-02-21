<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\CreatePostRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('articles.index', ['articles' => Article::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request): RedirectResponse
    {
        $request->validated();
        
        // Insert into the database
        Article::create([
            'title' => $request['title'],
            'content' => $request['content'],
            'author' => $request['author'],
        ]);

        return redirect('/article/create')->with('status', 'Article created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.single', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article): RedirectResponse
    {
        //
    }
}
