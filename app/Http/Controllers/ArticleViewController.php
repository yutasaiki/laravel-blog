<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleViewController extends Controller
{
    public function detail(Request $request)
    {
        // TODO: 記事詳細画面に必要なデータを取得処理を実装する。

        return view('article_detail', [
            'title' => '初めてのブログ投稿',
            'body' => 'テスト',
            'createdBy' => 'サイキ',
            'updatedBy' => 'サイキ',
        ]);
    }

    public function create(Request $request)
    {
        // TODO: 記事作成画面に必要なデータを取得処理を実装する。

        return view('article_create');
    }

    public function edit(Request $request)
    {
        // TODO: 記事編集画面に必要なデータを取得処理を実装する。

        return view('article_edit', [
            'title' => '初めてのブログ投稿',
            'body' => 'テスト',
            'createdBy' => 'サイキ',
            'updatedBy' => 'サイキ',
        ]);
    }
}
