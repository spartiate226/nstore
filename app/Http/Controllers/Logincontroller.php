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
    function vendorvue(){
        return view('auth.vendorlogin');
    }
    function login(Request $request){
     if (Auth::attempt($request->except('_token'))){
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

    function vendorlogin(Request $request){
        if (Auth::attempt($request->except('_token'))){
            return redirect('admin/login');
        }else{
            return redirect('admin/login');
        }
       }
    function logout(){
        Auth::logout();
        return redirect('admin/login');
    }

    function vendorlogout(){
        Auth::logout();
        return redirect('admin/login');
    }
}
