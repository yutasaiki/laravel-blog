@extends('layouts.app')

@section('content')
        <a href="{{ url('/blog/article/create') }}"><button type="button">記事作成</button></a>
        <div class="background">
                @foreach($articles as $article)
                        <div class="card">
                                        <div class="card-container">
                                                <div class="title-box">
                                                        <p class="title">{{$article->title}}</p>
                                                        <a href="{{ url('/blog/article/detail?article_id='.$article->id) }}"><button type="button">詳細</button></a>
                                                        <a href="{{ url('/blog/article/edit?article_id='.$article->id) }}"><button type="button">編集</button></a>
                                                </div>
                                                <div class="line"></div>
                                                <div class="desc-box">
                                                        <p class="desc">{{$article->body}}</p>
                                                </div>
                                        </div>
                                </div>        
                @endforeach
        </div>
@endsection