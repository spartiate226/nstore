<?php

namespace App\Http\Controllers\core;

use App\Http\Controllers\Controller;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PageController extends Controller
{
    function page($page){
        $website=session('website');
        if(Arr::exists($website->config->pages,$page)){
            return view('core.page');
        }else{
            return Response('Not found',404);
        }

    }
}
