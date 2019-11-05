@extends('layouts.app')

@section('content')
<div class="background">
    @auth
    <div class="article-operate btn-toolbar" style="max-width: 960px;">
        <div class="btn-group">
            <a href="{{ url('/blog/article/edit?article_id='.$article->id) }}" class="btn btn-secondary">Edit</a>
            <form method="POST" action="{{ url('/blog/article/delete?article_id='.$article->id) }}">
                @csrf
                <input type="hidden" name="article_id" value="{{$article->id}}">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
    @endauth
    <div class="card" style="max-width: 960px;">
        <div class="title-box">
            <p class="title">{{$article->title}}</p>
        </div>
        <div class="line"></div>
        <div class="desc-box">
            <p class="desc">{{$article->body}}</p>
        </div>
    </div>
</div>
@endsection
