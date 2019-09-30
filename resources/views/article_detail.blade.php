@extends('layouts.app')

@section('content')
        {{-- 文書構造も宮本さんのデザイン修正が終わったら実装する。それまではデータを表示させるために仮で作成 --}}
        <h1>ここは記事詳細画面です。</h1>
        タイトル
        <br>
        {{$article->title}}
        <br>
        本文
        <br>
        {{$article->body}}
        <br>
        作成者
        <br>
        {{$article->created_by}}
        <br>
        作成日
        <br>
        {{$article->created_at}}
        <br>
        更新者
        <br>
        {{$article->updated_by}}
        <br>
        更新日
        <br>
        {{$article->updated_at}}
        <br>
        <a href="{{ url('/blog/article/edit?article_id='.$article->id) }}"><button type="button">編集</button></a>
@endsection