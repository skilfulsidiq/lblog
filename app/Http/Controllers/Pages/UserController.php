<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    public function allUsers()
    {
        $users = User::all();
        return view('pages.dashboard.all-users',compact('users'));
    }
}
