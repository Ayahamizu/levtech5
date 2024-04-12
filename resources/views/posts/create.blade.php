<x-app-layout>
    <div class="w-full h-full text-center m-0 bg-white text-black font-sans text-base p-5">
        <h1 class="m-4 text-center underline decoration-green-400 text-2xl">紹介ページ作成画面</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="border-none">
            <div class="title m-3.5">
                <h2>ゼミ名</h2>
                <input type="text" name="post[title]" placeholder="〇〇ゼミ" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="content m-3.5">
                <h2>ゼミの内容</h2>
                <textarea name="post[content]" placeholder="研究内容など">{{ old('post.content') }}</textarea>
                <p class="content__error" style="color:red">{{ $errors->first('post.content') }}</p>
            </div>
            <div class="teacher m-3.5">
                <h2>先生について</h2>
                <textarea name="post[teacher]">{{ old('post.teacher') }}</textarea>
                <p class="teacher__error" style="color:red">{{ $errors->first('post.teacher') }}</p>
            </div>
            <div class="atmosphere m-3.5">
                <h2>ゼミの雰囲気</h2>
                <textarea name="post[atmosphere]">{{ old('post.atmosphere') }}</textarea>
                <p class="atmosphere__error" style="color:red">{{ $errors->first('post.atmosphere') }}</p>
            </div>
            <div class="career m-3.5">
                <h2>就職先、強い業界</h2>
                <textarea name="post[career]">{{ old('post.career') }}</textarea>
                <p class="career__error" style="color:red">{{ $errors->first('post.career') }}</p>
            </div>
            <div class="faculty m-3.5">
                <h2>学部</h2>
                    <select name="post[faculty_id]">
                    @foreach($faculties as $faculty)
                    <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                    @endforeach
                    </select>
            </div>
            <div class="major m-3.5">
                <h2>学科</h2>
                    <select name="post[major_id]">
                    @foreach($majors as $major)
                    <option value="{{ $major->id }}">{{ $major->name }}</option>
                    @endforeach
                    </select>
            </div>
            <div class="m-auto m-3.5 w-fit">
                <div class="text-left">
                <p><input type="radio" value="0" name="Isnumber"/>5人以上</p>
                <p><input type="radio" value="1" name="Isnumber"/>5人未満</p>
                <p><input type="radio" value="0" name="Isgroup"/>グループで取り組む</p>
                <p><input type="radio" value="1" name="Isgroup"/>個人で取り組む</p>
                <p><input type="radio" value="0" name="Iscareer"/>就職に強い</p>
                </div>
            </div>
            <input type="submit" value="store" class="bg-green-400 hover:bg-green-300 text-white rounded px-4 py-2 m-3.5"/>
        </form>
        <div class="back"><a href="/" class="bg-gray-300 hover:bg-gray-200 text-white rounded px-4 py-2">戻る</a></div>
    </div>
    </div>
    </x-app-layout>