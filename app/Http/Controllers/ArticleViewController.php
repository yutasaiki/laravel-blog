<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Log;

class ArticleViewController extends Controller
{
    public function list()
    {
        // TODO:一覧取得処理を実装する
        return view('article_list');
    }

    public function detail(Request $request)
    {
        $article_id = $request->input('article_id');
        $article = Article::where('id', $article_id)->first();

        Log::debug('記事情報 = '.$article);

        return view('article_detail', ['data' => $article]);
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

        return view('article_edit', ['data' => $article]);
    }
}
