<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Illuminate\Support\Facades\Input;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('home', compact('posts'));
    }

    public function show(Post $post)
    {

        return view('show', compact('post'));
    }

    public function store()
    {
        // $post->addPost(
        //     new Post($request->all())
        //     );
        // return back();
        $input = Input::all();
        Post::create([
            'title' => $input['postText'],
            'email' => Auth::user()->email,
        ]);
        return back();
    }
}
