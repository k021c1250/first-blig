<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
  public function index(Post $post)
 {
    return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
 } 

public function show(post $post)
{
 return view('posts/show')->with(['post'=>$post]);   
}
public function create()
{
    return view('posts/create');
}
public function store(PostRequest $request , Post $post)
{
    $input = $request['post'];
    $post->fill($input)->save();
    return redirect('/posts/' . $post->id);
}
public function edit(post $post)
{
    return view('posts/edit')->with(['post'=>$post]);
}
public function update(PostRequest $request , Post $post)
{
    $input = $request['post'];
    $post->fill($input)->save();
    return redirect('/posts/' . $post->id);
}
public function destroy(post $post){
    $post->delete();
    return redirect('/');
}

}
