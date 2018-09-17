<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function showuser(){
        return view('showuser');
    }
}