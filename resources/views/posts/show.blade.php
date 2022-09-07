@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        {{Auth::user()->name}}
        <h1 class="name">
            {{ $post->name }}
        </h1>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集する</a>]</p>
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post">
            @csrf
            @method('DELETE')
            <button type="button" onclick='return deletePost(this);'>削除する</button> 
        </form>
        <div class="content">
            <div class="content_post">
                <h3>使っている材料</h3>
                <p>{{ $post->kind }}</p>
                <h3>カテゴリー</h3>
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->sake }}</a>
                <h3>作り方</h3>
                <p>{{ $post->body }}</p>
                <img src="{{ $post->image_path }}">
            </div>
        </div>
        <div class="footer">
            [<a href="/">戻る</a>]
        </div>
        <script>
        function deletePost(e) {
            'use strict';
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById('form_delete').submit();
            }
        }    
        </script>
    </body>
</html>
@endsection