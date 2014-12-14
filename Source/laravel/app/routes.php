<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', function(){
return "All users";
});

Route::get('users/{id}', function($id){
return "User #$id";
})->where('id', '[0-9]+');

Route::get('/', function(){
	return Redirect::to('users');
});

Route::get('users', function(){
	return "All users";
});

Route::get('about', function(){
	return View::make('about')->with('number_of_users', 9000);
});

Route::get('users', function(){
	$users = User::all();
	return View::make('users.index')
		->with('users', $users);
});

Route::get('users/create', 'UsersController@showUsers');

Route::get('users/{user}', function(User $user) {
	return View::make('users.single')
		->with('user', $user);
});

Route::get('users/{user}/edit', function(User $user) {
	return View::make('users.edit')
		->with('user', $user)
		->with('method', 'put');
});

Route::get('users/{user}/delete', function(User $user) {
	return View::make('users.edit')
		->with('user', $user)
		->with('method', 'delete');
});

Route::post('users', function(){
	$user = User::create(Input::all());
	return Redirect::to('users/' . $user->id)
		->with('message', 'Successfully created page!');
});

Route::put('users/{user}', function(User $user) {
	$user->update(Input::all());
	return Redirect::to('users/' . $user->id)
		->with('message', 'Successfully updated page!');
});

Route::delete('users/{user}', function(User $user) {
	$user->delete();
	return Redirect::to('users')
		->with('message', 'Successfully deleted page!');
});