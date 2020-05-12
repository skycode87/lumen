<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{

    function index(){
        $users = User::all();
        return response()->json([$users],200);
    }

}
