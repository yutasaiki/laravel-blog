@extends('layouts.app')

@section('content')
        {{-- 文書構造も宮本さんのデザイン修正が終わったら実装する。それまではデータを表示させるために仮で作成 --}}
        <h1>ここは記事作成画面です。</h1>
        <form method="POST" action="{{ url('/blog/article/create') }}">
            @csrf
            タイトル
            <br>
            <input id="title" type="text" name="title" value="">
            <br>
            本文
            <br>
            <textarea name="body" rows="60" cols="100"></textarea>
            <br>
            <button type="submit">作成</button>
            <button type="">キャンセル</button>
        </form>
@endsection