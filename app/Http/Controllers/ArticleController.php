<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function create(Request $request)
    {
        $new_title = $request->input('title');
        $new_body = $request->input('body');

        $article = new Article();
        $article->title = $new_title;
        $article->body = $new_body;

        // FIXME:ログインユーザーの情報を取得する
        $user = [];
        $article->created_by = '';

        $article->save();

        return redirect('/blog/article/list');
    }

    public function update(Request $request)
    {
        $update_target_id = $request->input('article_id');
        $new_title = $request->input('title');
        $new_body = $request->input('body');

        $article = Article::where('id', $update_target_id)->first();
        $article->title = $new_title;
        $article->body = $new_body;

        // FIXME:ログインユーザーの情報を取得する
        $user = [];
        $article->updated_by = '';

        $article->save();

        return redirect('/blog/article/list');
    }

    public function delete(Request $request)
    {
        $delete_target_id = $request->input('article_id');
        $article = Article::where('id', $delete_target_id)->first();
        $article->is_deleted = true;
        $article->save();

        return redirect('/blog/article/list');
    }
}
