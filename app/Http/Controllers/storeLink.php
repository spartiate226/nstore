<?php

namespace App\Http\Controllers;

use App\boutique;
use Illuminate\Http\Request;
use App\module\Store;
use App\pays;

class storeLink extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request,$slug,$page=null,$params=null)
    {
        $boutique=boutique::where('slug',"=",$slug)->get();
        if ($boutique){
            $that=new Store($slug);
            $store=$that->info();

        switch ($page){
            case null:
                return view('front.frontpage',compact('store','that'));
                break;
            case "frontpage":
                return view('front.frontpage',compact('store','that'));
                break;
            case "category":
                $catid=$params;
                return view('front.category',compact('store','that',"catid"));
                break;
            case "product":
                return view('front.product',compact('store','that'));
                break;
            case "single":
                $id=$params;
                return view('front.single',compact('store','that','id'));
                break;
            case "login":
                return view('front.login',compact('store','that'));
                break;
            case "signup":
                return view('front.signup',compact('store','that'));
                break;
            case "cart":
                return view('front.cart',compact('store','that'));
                break;
            case "checkout":
                $pays=pays::all();
                return view('front.checkout',compact('store','that','pays'));
                break;
             case "page":
                return view('front.page',compact('store','that'));
                break;
            case "404":
                return view('front.404',compact('store','that'));
                break;
            case "my-account":
                return view('front.my-account',compact('store','that'));
                break;
            case "my-history":
                return view('front.my-history',compact('store','that'));
                break;
            case "contact":
                return view('front.contact',compact('store','that'));
                break;
            default :
                return view('front.404',compact('store','that'));
                break;
        }

        }else{
            echo '<h1>Not found</h1>';
            //return redirect('',404);
        }
    }
}
