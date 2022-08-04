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
        <h1>酒ブログ</h1>
        <form action="/posts" method="POST">
            {{ csrf_field() }}
                <div class="name">
                    <h2>カクテル名</h2>
                    <input type="text" name="post[name]" placeholder="ハイボール" value="{{ old('post.name') }}"/>
                    <p class="title__error" style="color:red">{{ $errors->first('post.name') }}</p>
                </div>
                <div class="kind">
                    <h2>使っている飲料</h2>
                    <textarea name="post[kind]" placeholder="・ウイスキー&#10;・炭酸水" value="{{ old('post.kind') }}"></textarea>
                    <p class="body__error" style="color:red">{{ $errors->first('post.kind') }}</p>
                </div>
                <div class="body">
                    <h2>作り方</h2>
                    <textarea name="post[body]" placeholder="1. グラスいっぱいに氷を入れる&#10;2. ウイスキーと炭酸水を1:1で割る" value="{{ old('post.body') }}"></textarea>
                    <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
                <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>