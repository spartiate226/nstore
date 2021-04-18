<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorLoginController extends Controller
{
    function vendorvue(){
        return view('auth.vendorlogin');
    }
    function vendorlogin(Request $request,$shop){
        if (Auth::attempt($request->except('_token'))){
            if (Auth::user()->group->boutique->slug==$shop){
                return redirect('dashboard/dash');
            }else{
               $this->vendorlogout();
            }
        }else{
            return redirect('admin/login');
        }
    }
    function vendorlogout(){
        Auth::logout();
        return redirect('admin/login');
    }
}
