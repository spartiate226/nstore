<?php

namespace App\Http\Controllers;

use App\product_comment;
use Illuminate\Http\Request;

class commentController extends Controller
{
    function store(Request $request){
        product_comment::create($request->all());
        return redirect()->back();
    }
}
