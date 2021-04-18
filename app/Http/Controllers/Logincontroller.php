<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Logincontroller extends Controller
{

    /**
     * Logincontroller constructor.
     */
    public function __construct()
    {
        //$this->middleware('auth')->only('logout');
    }

    function vue(){
        return view('auth.login');
    }

    function login(Request $request,$pseudo){
        $data=$request->except('_token');
        $data["pseudonyme"]=$pseudo;
     if (Auth::attempt($data)){
         switch (Auth::user()->role_id){
             case 1:
                 return redirect('nym/index');
                 break;
             case 2:
                 return redirect('1livreur/index');
                 break;
             default:
                 return redirect('admin/login');
                 break;
         }
     }else{
         return redirect('admin/login');
     }
    }


    function logout(){
        Auth::logout();
        return redirect('admin/login');
    }


}
