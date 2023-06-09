<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>お悩み掲示板</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>お悩み掲示板</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <a href='/posts/create'>投稿画面</a>
                    <a href=>プロフィール</a>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                   <x-app-layout>
    <x-slot name="header">
    </x-slot>
    </x-app-layout>             
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>