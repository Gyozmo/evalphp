<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;

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

    /**
     * @param Request $request
     * @return Response
     */
    public function storeproduct(Request $request){
        $product = new Product;
        $product->productname=$request->productname;
        $product->type=$request->type;
        $product->city=$request->city;
        $product->url=$request->url;
        $product->save();
        return redirect('showuser');
    }
}