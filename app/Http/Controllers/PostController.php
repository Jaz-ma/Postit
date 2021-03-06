<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['destroy','store']);

    }
    public function index()
    {
        $posts = Post::latest()->with('likes','user')->get();

        return view('posts.index',[
            'posts'=> $posts
        ]);
    }

    public function show(Post $post){
        return view('posts.show',[
            'post'=> $post
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'body'=> 'required',
        ]);


        $request->user()->posts()->create($request->only('body'));

        return back()->with('message','Post Seccussfully Created');
    }

    public function destroy(Post $post){
        $this->authorize('delete',$post);
        $post->delete();

        return back();
    }
}
