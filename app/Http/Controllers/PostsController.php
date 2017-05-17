<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except([ 'index','show']);
    }

    public function index()
    {
        $posts = Post::latest()->get();

//        dd($posts);
        return view('posts.index', compact('posts'));

    }

    public function show(Post $post)
    {
//        $post = Post::find($id);

//        dd($posts);
        return view('posts.show', compact('post'));
    }

    public function create()
    {

        return view('posts.create');
    }

    public function store()
    {

        $this->validate(request(),[

            'title' => 'required',
            'body' => 'required'

        ]);

        auth()->user()->publish(

            new Post(request(['title', 'body']))

        );

        return redirect('/');
    }
}
