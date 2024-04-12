<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Faculty;
use App\Models\Major;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Like;

class PostController extends Controller
{
    public function index(Request $request, Post $post, Faculty $faculty, Major $major)
    {
        //ログインユーザー情報取得
    $user = \Auth::user();
    //facultiesテーブル情報取得
    $faculties = Faculty::all();
    $majors = Major::all();

    //検索値の取得
    $g = $request->input('g');
    $a = $request->input('a');
    $s = $request->input('s');



    //クエリの取得
    $query = \DB::table('posts');
    
    if($g !== null) {
        //全角を半角に
        $search_split = mb_convert_kana($g, 's');
        //半角で文字を切り分けて、配列に入れる
        $search_split2 = preg_split('/[\s]+/', $search_split, -1, PREG_SPLIT_NO_EMPTY);
        //配列をforeachでまわして、where条件を付け加える
        foreach($search_split2 as $value){
            $query->where('title', 'LIKE', '%' . $value . '%');
        }
    }
    if($a !== null) {
        $query->where('faculty_id', '=', $a);
    }
    if($s !== null) {
        $query->where('major_id', '=', $s);
    }


    $posts = $query->get();


    return view('posts.index',compact('posts', 'user', 'faculties', 'majors', 'g', 'a', 's'));

        $posts=$post->where('seminar_id', 1)->get();
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    public function show(Post $post)
    {
        $user = \Auth::user();
        $like = Like::where('post_id', $post->id)->where('user_id', $user->id)->first();
        return view('posts.show')->with(['post' => $post, 'like' => $like]);
    }
    
    public function create(Faculty $faculty, Major $major)
    {
        $faculties = $faculty->get();
        $majors = $major->get();
        return view('posts.create')->with(['faculties' => $faculties, 'majors' => $majors]);
    }

    
    
    public function store(Post $post, PostRequest $request)
    {
        $input_post = $request['post'];
        $input_categories = $request->categories_array;
        $post->fill($input_post)->save();
        $post->categories()->attach($input_categories);
        return redirect('/posts/'.$post->id);
    }
}
