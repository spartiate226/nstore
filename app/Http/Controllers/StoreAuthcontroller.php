<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StoreAuthcontroller extends Controller
{
    function logout(){
        Auth::logout();
        return redirect()->back()->with(['reponse'=>"Deconnecter"]);
    }
    function login(Request $request){
        if (Auth::attempt(['pseudonyme'=>$request->pseudonyme,'password'=>$request->password])){
            if (Auth::user()->role_id==6 && Auth::user()->boutique_id==session('boutique_id')){
                return redirect('store/'.session('slug'))->with(['reponse'=>"Bienvenue ".Auth::user()->nom." ".Auth::user()->prenom]);
            }else{
                Auth::logout();
                return redirect()->back()->with(['reponse'=>"Identifiants inconnue"]);
            }
        }else{
            return redirect()->back()->with(['reponse'=>"Erreur de connexion"]);
        }
    }
    function register(Request $request){
        $donne=$request->except('password-confirm');
        $donne['password']=Hash::make($request->password);
        $donne['boutique_id']=session('boutique_id');
        $donne['role_id']=6;
        User::create($donne);
            return  redirect('store/'.session('slug').'/login');
    }
}
