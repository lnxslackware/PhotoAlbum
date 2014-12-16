<?php

class AlbumsController extends BaseController {
	public function getCreate()
	{
		return View::make('albums.create');
	}

	public function postCreate()
	{
		//Todo: validate
		$name = $_POST['name'];
		if ($name === '') {
			return View::make('albums.create');
		}

		$album = new Album();
		$album->name = $name;
		$album->owner_id = Auth::user()->id;
		$album->save();

		//Todo: fix redirect to some other page
		return Redirect::to('home.index');
	}
}