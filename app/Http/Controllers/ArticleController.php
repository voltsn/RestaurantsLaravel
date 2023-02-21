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
    public function edit(Article $article): View
    {
        return view('articles.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreatePostRequest $request, Article $article): RedirectResponse
    {
        $request->validated();

        // Update record
        $article->title = $request['title'];
        $article->content = $request['content'];
        $article->author = $request['author'];

        $article->save();

        return redirect('/articles/edit/'.$article->id)->with('status', 'Article update sucesssfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article): RedirectResponse
    {
        //
    }
}
