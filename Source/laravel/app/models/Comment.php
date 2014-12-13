<?php

class Comment extends \Eloquent {
	protected $fillable = [];

	public function author()
	{
		return $this->belongsTo('User');
	}

	public function photo()
	{
		return $this->belongsTo('Photo');
	}
}