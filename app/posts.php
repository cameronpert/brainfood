<?php

namespace App;


class posts extends Model
{
	public function comments()
	{
		return $this->hasMany(comment::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function addComment($body){
		Comment::create([
			'body' => $body,
			'posts_id' => $this->id,
			'user_id' => auth()->id()
	]);
	}


}

