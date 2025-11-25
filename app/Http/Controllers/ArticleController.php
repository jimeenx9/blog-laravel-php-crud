<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('user')->orderBy('date', 'desc')->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::with('user')->findOrFail($id);

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'date' => 'required|date'
        ]);

        Article::create([
            'title' => $request->title,
            'body' => $request->body,
            'date' => $request->date,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('articles.index')
                        ->with('success', 'Artículo creado correctamente.');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        if ($article->user_id !== auth()->id()) {
            abort(403); // prohibido
        }

        $article->delete();

        return redirect()->route('articles.index')
                        ->with('success', 'Artículo borrado correctamente.');
    }


    public function myArticles()
    {
        $articles = Article::with('user')
                    ->where('user_id', auth()->id())
                    ->orderBy('date', 'desc')
                    ->get();

        return view('articles.index', compact('articles'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        if ($article->user_id !== auth()->id()) {
            abort(403);
        }

        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        if ($article->user_id !== auth()->id()) {
            abort(403);
        }

        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'date' => 'required|date',
        ]);

        $article->update([
            'title' => $request->title,
            'body' => $request->body,
            'date' => $request->date,
        ]);

        return redirect()->route('articles.mine')
                        ->with('success', 'Artículo actualizado correctamente.');
    }





}
