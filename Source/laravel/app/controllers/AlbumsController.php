<?php

class AlbumsController extends BaseController
{


    public function viewPhotos($id)
    {
        $album = Album::find($id);
        if ($album === null) {
            //throw error
            return "error";
        }

        $comments = Comment::where('album_id', '=', $album->id)->with('author')->get();
        //dd($album->photos()->get()[0]->img_name);

        return View::make('albums.viewPhotos', array('photos' => $album->photos()->get(), 'comments' => $comments, 'albumId' => $album->id));
    }

    public function viewAllAlbums()
    {
        $allAlbums = Album::with('owner')->get();

        return View::make('albums.allAlbums', array('albums' => $allAlbums));
    }

    public function viewOwnAlbums()
    {
        $allAlbums = DB::table('albums');
        $ownAlbums = $allAlbums->where('owner_id', '=', Auth::user()->id)->get();
        return View::make('albums.ownAlbums', array('ownAlbums' => $ownAlbums));
    }

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

    public function getEdit($id)
    {
        $album = Album::find($id);
        if($album === null){
            //throw error
        }
        if($album->owner_id !== Auth::user()->id){
            //throw error
        }
        return View::make('albums.edit',array('album' => $album ));
    }
    public function putEdit($id)
    {
        $album = Album::find($id);
        $putData = file_get_contents('php://input', 'r');
        if($album === null){
            //throw error
        }
        if($album->owner_id !== Auth::user()->id){
            //throw error
        }
        $parsedData = [];
        parse_str($putData, $parsedData);
        $album->name = $parsedData['name'];
        $album->save();

        //TODO fix redirect
        return Redirect::to('home.index');
    }
}