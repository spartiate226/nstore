<?php

namespace App\Http\Controllers;

use App\boutique;
use App\boutiqueAnnexe;
use App\Events\onportefeuillechange;
use App\portefeuille;
use App\storeActiveTemplate;
use App\storegroup;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class boutiqueController extends Controller
{

    public function __construct()
    {

    }
    function addBoutique(Request $request){
        $donneB=$request->except(['nom','_token','prenom','email','numero','pseudonyme']);
        $donneP=$request->except(['bnom','_token','tel1','tel2','pack_id','slug','quartier_id']);
        $donneP['role_id']=3;
        $proprietaire=User::create($donneP);
        if($proprietaire){
            $donneB['user_id']=$proprietaire->id;
            $boutique=boutique::create($donneB);
            $group=storegroup::create([
                "boutique_id"=>$boutique->id,
                "proprietaire_id"=>$proprietaire->id
            ]);
            if ($boutique){

                $portefeuille=portefeuille::create([
                    'portefeuille_state_id'=>1,
                    'boutique_id'=>$boutique->id,
                    'montant'=>0
                ]);

                event(new onportefeuillechange($portefeuille));

                $pass="password";
                $proprietaire->update([
                    "storegroup_id"=>$group->id,
                    "password"=>Hash::make($pass),
                ]);
                Storage::disk('themes_path')->makeDirectory($boutique->id.'/themes');
                Storage::disk('themes_path')->makeDirectory($boutique->id.'/images');
                $unzip=unzipTemplate(market_path()->path('classic.zip'),store_url('theme_path',$boutique->id));
                if ($unzip){

                    storeActiveTemplate::create([
                        'boutique_id'=>$boutique->id,
                        'template'=>getfilename(market_path()->path('classic.zip'))
                    ]);
                    themes_path()->copy($boutique->id.'/themes/'.getfilename(market_path()->path('classic.zip')).'/config.json',$boutique->id.'/themes/'.getfilename(market_path()->path('classic.zip')).'/configCopy.json');
                }
            }else{
                return redirect('nym/boutique')->with(['reponse'=>"Erreur lors de l'enregistrement"]);
            }
            return redirect('nym/boutique')->with(['reponse'=>'Succès un email à été envoyé au commerçant pour ses identifiants']);
        }else{
            return redirect('nym/boutique')->with(['reponse'=>"Erreur lors de l'enregistrement"]);
        }
    }

    function upload_theme(Request $request){
        $request->theme->storeAs($request->boutique.'/themes','onupload.zip','themes_path');
       if ( unzipTemplate(themes_path()->path($request->boutique.'/themes/onupload.zip'),themes_path()->path($request->boutique.'/themes'))){
           themes_path()->delete($request->boutique.'/themes/onupload.zip');
       }
        return redirect('dashboard/market');
    }
    function changeTheme(Request $request,$theme){
        $active=Auth::user()->boutique->template;
        if ($active->update(['template'=>$theme])){
            return redirect('dashboard/market');
        }
    }



    function loadmedia(Request $request){
        $request->media->store(Auth::user()->group->boutique_id.'/images','themes_path');
        return redirect('dashboard/phototeque');
     }

     function addAnnexe(Request $request){
         $donn=$request->all();
         $donn['boutique_id']=Auth::user()->group->boutique->id;
         boutiqueAnnexe::create($donn);
         return redirect('dashboard/dash');
     }
}
