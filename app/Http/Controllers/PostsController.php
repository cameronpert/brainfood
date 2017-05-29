<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;

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
    	return view('posts.create');
    }   

    public function store()
    {
    	//		 //create a new post using the request data
    	// $post = new Posts;

    	// $post->title = request('title');
    	// $post->body = request('body');

    	// 		//save it to the database
    	// $post->save();

    	// 		//finally redirect to the homepage

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
}
























