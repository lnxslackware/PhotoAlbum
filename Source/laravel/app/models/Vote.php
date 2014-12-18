<?php

class Vote extends \Eloquent {
	protected $fillable = [];

	public function album()
	{
		return $this->belongsTo('Album');
	}

	public function voter()
	{
		return $this->belongsTo('User');
	}
}