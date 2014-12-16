<?php

/**
 * Created by PhpStorm.
 * User: Lyudmil
 * Date: 16.12.2014
 * Time: 12:32
 */
class PhotoController extends BaseController {

    public $restful = true;

    public function post_upload()
    {
        $input = Input::all();

        if(isset($input['description']))
        {
            $input['description'] = filter_var($input['description'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
        }

        $rules = array(
            'photo'       => 'required|image|max:500',
            'description' => 'required'
        );

        $v = Validator::make($input, $rules);

        if($v->fails())
        {
            return Redirect::to('profile')->with_errors($v);
        }

        //dd($input['photo']->guessExtension());
        $extension = $input['photo']->guessExtension();
        $directory = public_path() . '\uploads';
        $filename = sha1(Auth::user()->id . time()) . ".{$extension}";

        //dd($directory);
        //$upload_success = Input::upload('photo', $directory, $filename);
        $upload_success = $input['photo']->move($directory, $filename);
        //dd($upload_success);

        if($upload_success)
        {
            //$photo = new Photo(array(
            //    'location'    => URL::to('uploads/' . sha1(Auth::user()->id) . '/' . $filename),
            //    'description' => $input['description']
            //));
            //Auth::user()->photos()->insert($photo);
            Session::flash('status_success', 'You have successfully uploaded your new pic!');
        } else
        {
            Session::flash('status_error', 'An error has occured while uploading your pic -- Please Try Again!');
        }

        //todo fix redirect
        return Redirect::to('profile');
    }
}