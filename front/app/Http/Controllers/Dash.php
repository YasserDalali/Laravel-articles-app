<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dash extends Controller
{
    public function index(Request $request)
    {
        $name = 'Yasser';
        return view('dash',compact('name')); 
        }
}
