@extends('layouts.app')

@section('content')
<div class="main_img"></div>
<div class="background">
    @auth
    <div class="article-operate" style="max-width: 700px;">
        <a href="{{ url('/blog/article/create') }}" class="btn btn-secondary">＋ New Article</a>
    </div>
    @endauth
    @foreach($articles as $article)
    <div class="card" style="max-width: 700px;">
        <div class="card-container">
            <div class="title-box">
                <a href="{{ url('/blog/article/detail?article_id='.$article->id) }}">
                    <p class="title list-title">{{$article->title}}</p>
                </a>
            </div>
            <div class="line"></div>
            <div class="desc-box">
                <p class="desc list-body">{{$article->body}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
