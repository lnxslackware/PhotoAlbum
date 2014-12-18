<?php
class CommentsController extends BaseController {
	public function postComment($id)
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
}