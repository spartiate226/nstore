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
    function login(Request $request){
     if (Auth::attempt($request->except('_token'))){
         switch (Auth::user()->role_id){
             case 1:
                 return redirect('nym/index');
                 break;
             case 2:
                 return redirect('1livreur/index');
                 break;
             case 3:
                 return redirect('dashboard/dash');
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
