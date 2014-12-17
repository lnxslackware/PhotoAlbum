<?php

class Photo extends \Eloquent 
{
	protected $fillable = array('title', 'img_name', 'autho_id', 'album_id');

	public function author() 
	{
		return $this->belongsTo('User');
	}

	public function album()
	{
		return $this->belongsTo('Album');
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