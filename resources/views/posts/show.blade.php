<!DOCTYPE HTML>
<hnavi  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <x-app-layout>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <p>{{ $post->body }}</p>
        <x-slot name="header">
        </x-slot>
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
            <h1>コメント欄</h1>
            <input type="text" name="post[title]" placeholder="人間関係の悩みについて" value="{{ old('post.title') }}"/>
            <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            <button type="button" onclick="deletePost({{ $post->id }})">コメントをする</button>
        </div>
         </x-app-layout>
    </body>
</html>