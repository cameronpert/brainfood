<?php

namespace App\Http\Controllers;

use App\posts;

use App\comment;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
	public function store(posts $post)
	{
		$this->validate(request(), ['body'=> 'required|min:2']);
		$post->addComment(request('body'));

		return back();
	}

	public function destroy(posts $post, $commentsid)
    {
        \DB::table('comments')->where('id', $commentsid)->delete();

       return redirect('/posts');
    }
}
