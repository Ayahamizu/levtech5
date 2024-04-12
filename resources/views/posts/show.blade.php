<!DOCTYPE html>
    <x-app-layout>
        <div class="space-x-48 bg-white subpixel-antialiased">
        <div class="title">
            <p class="space-x-48 text-center underline decoration-green-400 text-2xl py-1">{{ $post->title }}</p>
        </div>
        <div class="text-right">
        {{ $post->faculty->name }}-{{ $post->major->name }}
        </div>
        <div class="content m-3.5 py-3">
            <div class="content__post">
                 <p class="text-2xl text-green-400">-内容</p>
                <p>{{ $post->content }}</p>
                {{ $post->Isgroup }}
            </div>
        </div>
        <div class="teacher m-3.5 py-3">
             <p class="text-2xl text-green-400">-先生</p>
            <p>{{ $post->teacher }}</p>
        </div>
        <div class="atmosphere m-3.5 py-3">
             <p class="text-2xl text-green-400">-雰囲気</p>
            <p>{{ $post->atmosphere }}</p>
        </div>
        <div class="career m-3.5 py-3">
             <p class="text-2xl text-green-400">-就職先、強い業界</p>
            <p>{{ $post->career }}</p>
        </div>
        <div class="m-3.5 py-3">
        <p class="text-2xl text-green-400">-その他</p>
        @if($post->Isgroup == 1)
        <p>大人数</p>
        @endif
        
        @if($post->Iscareer == 1)
        <p>就職に強い</p>
        @endif
        </div>
        
       <div class="space-x-48">
 
        <!-- もし$niceがあれば＝ユーザーが「いいね」をしていたら -->
        
        @if($like)
        <!-- 「いいね」取消用ボタンを表示 -->
	        <a href="{{ route('unlike', $post) }}" class="btn btn-success btn-sm flex items-center">
	            <img src="/rednicebutton.png" width="30px" class="space-x-48 block"><span class="badge block ml-1">{{ $post->likes->count() }}</span>
	        </a>
        @else
        <!-- まだユーザーが「いいね」をしていなければ、「いいね」ボタンを表示 -->
        	<a href="{{ route('like', $post) }}" class="btn btn-secondary btn-sm flex items-center">
        	    <img src="/blacknicebutton.png" width="30px" class="space-x-48 block"><span class="badge block ml-1">{{ $post->likes->count() }}</span>
        	    </a>
        @endif
        </div>
       
        <div class="footer">
            <a href="/" class="text-center bg-gray-300 hover:bg-gray-200 text-white rounded px-4 py-2 block mt-1 w-40">戻る</a>
        </div>
        </div>
    </x-app-layout>
