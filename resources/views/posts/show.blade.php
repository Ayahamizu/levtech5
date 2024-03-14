<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
    </head>
    <x-app-layout>
    <body>
        <div class="title">
            <p>ゼミ名</p>
            <p>{{ $post->title }}</p>
        </div>
        <div class="content">
            <div class="content__post">
                 <p>内容</p>
                <p>{{ $post->content }}</p>
                {{ $post->Isgroup }}
            </div>
        </div>
        <div class="teacher">
             <p>先生</p>
            <p>{{ $post->teacher }}</p>
        </div>
        <div class="atmosphere">
             <p>雰囲気</p>
            <p>{{ $post->atmosphere }}</p>
        </div>
        <div class="career">
             <p>就職先、強い業界</p>
            <p>{{ $post->career }}</p>
        </div>
        @if($post->Isgroup == 1)
        <p>大人数</p>
        @endif
        
        @if($post->Iscareer == 1)
        <p>就職に強い</p>
        @endif
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
    </x-app-layout>
</html>
