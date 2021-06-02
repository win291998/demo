<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;



class PostController extends Controller
{
    public function addPost()
    {
        return view('add-post');
    
    }

    public function createPost(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect('/posts') ;
        return back()->with('post_created','Successfully!');
    }
    public function getPost()
    {
        $posts = Post::orderBy('id','ASC')->get();
        return view('posts', compact('posts'));
    }
    public function getPostById($id)
    {
        $posts = Post::where('id',$id)->first();
        return view('single-post', compact('posts'));
    }
    public function deletePost($id){
        Post::where('id',$id)->delete();
        return redirect('/posts');
    }
    public function editPost($id)
    {
        $post = Post::find($id);
        return view('edit-post', compact('post'));
    }
    public function updatePost(Request $request){
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return back()->with('post-up','Post update');
    }
}
