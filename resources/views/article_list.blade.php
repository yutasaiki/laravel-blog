@extends('layouts.app')

@section('content')
        <div class="main_img"></div>
        <div class="background">
                <div class="article-operate">
                        <a href="{{ url('/blog/article/create') }}" class="btn btn-secondary">＋ New Article</a>
                </div>
                @foreach($articles as $article)
                        <div class="card">
                                        <div class="card-container">
                                                <div class="title-box">
                                                        <p class="title">{{$article->title}}</p>
                                                        <div class="article-edit-buttons">
                                                                <a href="{{ url('/blog/article/detail?article_id='.$article->id) }}" class="btn btn-info">Detail</a>
                                                                <a href="{{ url('/blog/article/edit?article_id='.$article->id) }}" class="btn btn-warning">Edit</a>
                                                        </div>
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