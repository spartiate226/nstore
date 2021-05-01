<?php

namespace App\Http\Controllers;

use App\product_rate;
use Illuminate\Http\Request;

class rateController extends Controller
{
    function store(Request $request){
        product_rate::create($request->all());
        return redirect()->back();
    }
}
