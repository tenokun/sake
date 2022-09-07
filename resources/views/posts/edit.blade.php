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
        <h1>編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__name'>
                    <h2>カクテル名</h2>
                    <input type='text' name='post[name]' value="{{ $post->name }}">
                </div>
                <div class='content__kind'>
                    <h2>使っている材料</h2>
                    <input type='text' name='post[kind]' value="{{ $post->kind }}">
                </div>
                <div class='content__body'>
                    <h2>作り方</h2>
                    <input type='text' name='post[body]' value="{{ $post->body }}">
                </div>
                <img src="{{ $post->image_path }}">
                <input type="submit" value="保存">
            </form>
        </div>
    </body>
</html>
@endsection