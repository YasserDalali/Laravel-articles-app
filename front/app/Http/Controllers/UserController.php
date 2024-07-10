<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function create(Request $request) {
        User::create([
            'name' => "yarob",
            'email' => "yarob@test.com",
            'password'=> 'p12321fe',


        ]);
    }
}
