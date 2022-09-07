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
        <h1>酒ブログ</h1>
        <p class="create">[<a href="/posts/create">投稿する</a>]</p>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='name'>
                        <a href="/posts/{{ $post->id }}">{{ $post->name }}</a>
                    </h2>
                    <h3>使っている材料</h3>
                    <p class='kind'>{{ $post->kind }}</p>
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->sake }}</a>
                    <h3>作り方</h3>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach    
        </div>
        <div class='paginate'>
            {{ $posts->links()}}
        </div>
    </body>
</html>
@endsection