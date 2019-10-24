@extends('layouts.app')

@section('content')
<form method="POST" action="{{ url('/blog/article/create') }}">
    @csrf
    <div class="card" style="max-width: 960px;">
        <div class="title-box">
            <input id="title" class="form-control" type="text" name="title" value="" placeholder="タイトル">
        </div>

        <div class="line"></div>
        <div class="desc-box">
            <textarea class="form-control" name="body" rows="60" cols="100" placeholder="本文"></textarea>
        </div>
    </div>
    <div class="article-operate" style="max-width: 960px;">
        <button type="submit" class="btn btn-secondary">Create</button>
        <a href="{{ url('/blog/article/list') }}" class="btn btn-light">Cancel</a>
    </div>
</form>
@endsection
