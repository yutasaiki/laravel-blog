@extends('layouts.app')

@section('content')
<form method="POST" action="{{ url('/blog/article/update') }}">
    @csrf
    <input type="hidden" name="article_id" value="{{$article->id}}">
    <div class="card" style="max-width: 960px;">
        <div class="title-box">
            <input id="title" class="form-control" type="text" name="title" value="{{$article->title}}">
        </div>

        <div class="line"></div>
        <div class="desc-box">
            <textarea class="form-control" name="body" rows="60" cols="100">{{$article->body}}</textarea>
        </div>
    </div>
    <div class="article-operate" style="max-width: 960px;">
        <button type="submit" class="btn btn-secondary">Update</button>
        <a href="{{ url('/blog/article/detail?article_id='.$article->id) }}" class="btn btn-light">Cancel</a>
    </div>
</form>
@endsection
