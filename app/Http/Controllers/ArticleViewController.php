<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Log;

class ArticleViewController extends Controller
{
    public function list()
    {
        $articles = Article::all();

        return view('article_list', ['articles' => $articles]);
    }

    public function detail(Request $request)
    {
        $article_id = $request->input('article_id');
        $article = Article::where('id', $article_id)->first();

        Log::debug('記事情報 = '.$article);

        return view('article_detail', ['article' => $article]);
    }

    public function create(Request $request)
    {
        return view('article_create');
    }

    public function edit(Request $request)
    {
        $article_id = $request->input('article_id');
        $article = Article::where('id', $article_id)->first();

        Log::debug('記事情報 = '.$article);

        return view('article_edit', ['article' => $article]);
    }
}
