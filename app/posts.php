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

	public function addComment($body)
	{
		$this->comments()->create(compact('body'));
	}
}

