<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function searchresult(){
        return view('searchresult');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function addproduct(){
        return view('addproduct');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function showproduct(){
        return view('showproduct');
    }
}