<?php

class UsersController extends BaseController {

    public function showUsers()
    {
        $user = new User;

        return View::make('users.edit')
            ->with('user', $user)
            ->with('method', 'post');
    }
}