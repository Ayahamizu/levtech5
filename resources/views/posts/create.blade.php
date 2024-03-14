<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ゼミ紹介ページ</title>
    </head>
    <x-app-layout>
    <body>
        <h1>ゼミ紹介ページ</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>ゼミ名</h2>
                <input type="text" name="post[title]" placeholder="〇〇ゼミ" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="content">
                <h2>ゼミの内容</h2>
                <textarea name="post[content]" placeholder="研究内容など">{{ old('post.content') }}</textarea>
                <p class="content__error" style="color:red">{{ $errors->first('post.content') }}</p>
            </div>
            <div class="teacher">
                <h2>先生について</h2>
                <textarea name="post[teacher]">{{ old('post.teacher') }}</textarea>
                <p class="teacher__error" style="color:red">{{ $errors->first('post.teacher') }}</p>
            </div>
            <div class="atmosphere">
                <h2>ゼミの雰囲気</h2>
                <textarea name="post[atmosphere]">{{ old('post.atmosphere') }}</textarea>
                <p class="atmosphere__error" style="color:red">{{ $errors->first('post.atmosphere') }}</p>
            </div>
            <div class="career">
                <h2>就職先、強い業界</h2>
                <textarea name="post[career]">{{ old('post.career') }}</textarea>
                <p class="career__error" style="color:red">{{ $errors->first('post.career') }}</p>
            </div>
            <div>
                <h2>カテゴリー</h2>
                @foreach($categories as $category)
                
                
                    <input type="checkbox" value="{{ $category->id }}" name="categories_array[]"/>
                        <label>{{$category->category_name}}</label>
                @endforeach
            </div>
            <div>
                <p><input type="radio" value="0" name="Isnumber"/>5人以上</p>
                <p><input type="radio" value="1" name="Isnumber"/>5人未満</p>
                <p><input type="radio" value="0" name="Isgroup"/>グループで取り組む</p>
                <p><input type="radio" value="1" name="Isgroup"/>個人で取り組む</p>
                <p><input type="radio" value="0" name="Iscareer"/>就職に強い</p>
                
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
    </x-app-layout>
</html>