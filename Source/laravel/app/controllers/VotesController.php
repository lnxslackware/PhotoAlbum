<?php
class VotesController extends BaseController {
	public function vote($id)
	{
		$album = Album::find($id);
		if ($album === null) {
				//Error
		}

		$input = Input::all();
		if (1 > $input['vote'] || $input['vote'] > 10) {
			//Error
		}

		$vote = new Vote([
			'value' => $input['vote'],
			'album_id' => $album->id,
			'voter_id' => Auth::user()->id
			]);

		$album->rank = $album->rank + $vote->value;
		$album->save();
		$vote->save();

		return Redirect::to('/albums/'.$album->id);
	}
}