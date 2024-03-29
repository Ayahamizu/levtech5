<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>検索結果画面</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <x-app-layout>
    <body>
        <h1>法政大学</h1>
        <p>検索結果</p>
        <a href='/posts/create'>create</a>
        <div class='posts'>
            @foreach ($posts as $post)
            <div class='post'>
                <h2 class='seminar'>
                    <a href="/posts/{{ $post->id }}">{{ $post->seminar }}</a>
                    </h2>
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        {{ Auth::user()->name }}
    </body>
    </x-app-layout>
</html>
