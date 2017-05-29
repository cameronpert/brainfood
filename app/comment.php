<?php

namespace App;

class comment extends Model
{
    public function posts()
	{
		return $this->belongsTo('App\posts');
	}
	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
