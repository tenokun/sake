@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>酒ブログ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        {{Auth::user()->name}}
        <h1>ブックマーク</h1>
        <p class="create">[<a href="/posts/create">投稿する</a>]</p>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='name'>
                        <a href="/posts/{{ $post->id }}">{{ $post->name }}</a>
                    </h2>
                    <h3>使っている材料</h3>
                    <p class='kind'>{{ $post->kind }}</p>
                    <h3>カテゴリー</h3>
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->sake }}</a>
                    <h3>作り方</h3>
                    <p class='body'>{{ $post->body }}</p>
                    <img src="{{ $post->image_path }}">
                </div>
                <div class="row justify-coment-center">
                    @if($post->users()->where('user_id', Auth::id())->exists())
                    <div class="col-md-3">
                        <form action="/posts/{{ $post->id }}/unfavorites" method="POST">
                            @csrf
                            <input type="submit" value="&#xf164;いいね取り消す" class="fas btn-danger">
                        </form>
                    </div>
                    @else
                    <div class="col-md-3">
                        <form action="/posts/{{ $post->id }}/favorites" method="POST">
                            @csrf
                            <input type="submit" value="&#xf164;いいね" class="fas btn-success">
                        </form>
                    </div>
                    @endif
                </div>
                <div class="row justify-content-center">
                    <p>いいね数：{{ $post->users()->count() }}</p>
                </div>
            @endforeach   
        </div>
    </body>
</html>
@endsection
