<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>お悩み掲示板</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2>件名</h2>
                    <p class='body'>{{ $post->body }}</p>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <a href='/posts/create'>投稿画面</a>
                    <h2 class='プロフィール'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>