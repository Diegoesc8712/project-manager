<?php

namespace App\Http\Controllers;
use App\user;

class UserController extends Controller
{
    function index()
    {
        $user = new User();
        $user->name = 'Diego';
        $user->email = 'diego@gmail.com';
        return response()->json([$user]);
    }
}