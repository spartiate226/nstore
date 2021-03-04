<?php

namespace App\Http\Controllers;

use App\boutique;
use Illuminate\Http\Request;

class storeLink extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request,$slug,$page=null)
    {
        $boutique=boutique::where('slug',"=",$slug)->get();
        if ($boutique){
            $store=$boutique[0];
            session(['boutique_id'=>$store->id,'slug'=>$store->slug]);

        switch ($page){
            case null:
                return view('front.frontpage',compact('store'));
                break;
            case "frontpage":
                return view('front.frontpage',compact('store'));
                break;
            case "category":
                return view('front.category',compact('store'));
                break;
            case "product":
                return view('front.product',compact('store'));
                break;
            case "single":
                return view('front.single',compact('store'));
                break;
            case "login":
                return view('front.login',compact('store'));
                break;
            case "signup":
                return view('front.signup',compact('store'));
                break;
            case "cart":
                return view('front.cart',compact('store'));
                break;
            case "checkout":
                return view('front.checkout',compact('store'));
                break;
             case "page":
                return view('front.page',compact('store'));
                break;
            case "404":
                return view('front.404',compact('store'));
                break;
            default :
                return view('front.404',compact('store'));
                break;
        }

        }else{
            echo '<h1>Not found</h1>';
            //return redirect('',404);
        }
    }
}
