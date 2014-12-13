<?php

class Photo extends \Eloquent 
{
	protected $fillable = [];

	public function author() 
	{
		return $this->belongsTo('User');
	}

	public function comments()
	{
		return $this->hasMany('Comment');
	}

	public function category()
	{
		return $this->belongsTo('Category');
	}
}