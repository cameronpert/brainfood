<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;

use App\User;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    
    public function index()
    {
        $posts = Posts::latest()->get();
    	return view('posts.index', compact('posts'));
    }

	public function create()
    {
        if (auth()->check())
        {
            return view('posts.create');
        }

        elseif (! auth()->check())
        {
          return view('sessions.create');
        }
    }   

    public function store()
    {
    	$this->validate(request(),[
    		'title' => 'required',
    		'body' => 'required'
    		]);

    	Posts::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
            ]);

    	return redirect('/');
    } 

    public function show(Posts $post)
    {
        return view('posts.show', compact('post'));
    }

    public function authors(){

        $users = User::get();
        return view('author.index', compact('users'));

    }
}
























