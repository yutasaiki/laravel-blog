@extends('layouts.app')

@section('content')
        {{-- 文書構造も宮本さんのデザイン修正が終わったら実装する。それまではデータを表示させるために仮で作成 --}}
        <h1>ここは記事一覧画面です。</h1>
        <a href="{{ url('/blog/article/create') }}"><button type="button">記事作成</button></a>
        <hr>
        @foreach($articles as $article)
        タイトル ： {{$article->title}}
        <br>
        本文 ： {{$article->body}}
        <br>
        <a href="{{ url('/blog/article/detail?article_id='.$article->id) }}"><button type="button">詳細</button></a>
        <a href="{{ url('/blog/article/edit?article_id='.$article->id) }}"><button type="button">編集</button></a>
        <hr>
        @endforeach
@endsection