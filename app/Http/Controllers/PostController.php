<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Post $post)
    {
        $posts=$post->where('seminar_id', 1)->get();
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }
    public function create(Category $category)
{
    $categories = $category->get();
    return view('posts.create')->with(['categories' => $categories]);
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
