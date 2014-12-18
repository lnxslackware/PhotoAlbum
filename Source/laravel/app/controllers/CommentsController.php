<?php
class CommentsController extends BaseController {
	public function postPhotoComment($id)
	{
		$photo = Photo::find($id);
		if ($photo === null) {
			//Error
		}

		$input = Input::all();
		$comment = new Comment([
			'content' => $input['content'],
            'author_id' => Auth::user()->id,
            'photo_id' => $id
			]);

		$comment->save();
		return Redirect::to('/photo/'.$id);
	}

    public function postAlbumComment($id)
    {
        $album = Album::find($id);
        if ($album === null) {
            //Error
        }

        $input = Input::all();
        $comment = new Comment([
            'content' => $input['content'],
            'author_id' => Auth::user()->id,
            'album_id' => $id
        ]);

        $comment->save();
        return Redirect::to('/albums/'.$id);
    }
}