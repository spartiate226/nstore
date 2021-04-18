<?php

namespace App\Http\Controllers;

use App\role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$role)
    {
        $donne=$request->all();
         $donne['pseudonyme']=$request->numero;
         $donne['password']=Hash::make(Str::random(8));

        if ($request->role_id==3 || $request->role_id==5){
            $donne['storegroup_id']=Auth::user()->group->id;
        }
        if ($request->role_id==4){
            $donne['photo']=$request->photo->store('livreur_photo','livreur_photo');
        }
        User::create($donne);
        switch ($role){
            case 1:
                return redirect("nym/user")->with(['reponse'=>"Succès!!"]);
                break;
            case 2:
                return redirect("1livreur/index")->with(['reponse'=>"Succès!!"]);
                break;
            case 3:
                return redirect("dashboard/user")->with(['reponse'=>"Succès!!"]);
                break;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($user,$role)
    {
        $util=User::find($user);
        switch ($role){
            case 1:
                return view("nymBoard.profile",compact('util'));
                break;
            case 2:
                return view("1livreur.profile",compact('util'));
                break;
            case 3:
                return view("dashboard.utilisateur.profile",compact('util'));
                break;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
