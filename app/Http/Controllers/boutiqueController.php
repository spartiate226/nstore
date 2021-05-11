<?php

namespace App\Http\Controllers;

use App\boutique;
use App\boutiqueAnnexe;
use App\demande_boutique;
use App\Events\onBoutiquecreate;
use App\Events\onportefeuillechange;
use App\Http\Requests\ProduitRequest;
use App\portefeuille;
use App\produit;
use App\storeActiveTemplate;
use App\storegroup;
use App\storepack;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class boutiqueController extends Controller
{

    public function __construct()
    {
     $this->middleware("auth")->except(["demande"]);
    }
    function addBoutique(Request $request){
        $content=[];
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
                storepack::create([
                    "boutique_id"=>$boutique->id,
                    "pack_id"=>$donneB['pack_id'],
                    "expired"=>"false"
                ]);
                $portefeuille=portefeuille::create([
                    'portefeuille_state_id'=>1,
                    'boutique_id'=>$boutique->id,
                    'montant'=>0
                ]);

                event(new onportefeuillechange($portefeuille));

                $pass=Str::random(8);
                $proprietaire->update([
                    "storegroup_id"=>$group->id,
                    "password"=>Hash::make($pass),
                ]);
                Storage::disk('themes_path')->makeDirectory($boutique->id.'/themes');
                Storage::disk('themes_path')->makeDirectory($boutique->id.'/images');

                if (File::copyDirectory(market_path()->path('themes/classic'),store_url('theme_path',$boutique->id)."/classic")){

                    storeActiveTemplate::create([
                        'boutique_id'=>$boutique->id,
                        'template'=>'classic'
                    ]);
                    themes_path()->copy($boutique->id.'/themes/classic/config.json',$boutique->id.'/themes/classic/configCopy.json');
                }
                $content=[
                    "mailto"=>$request->email,
                    "password"=>$pass,
                    "nom"=>$request->nom,
                    "prenom"=>$request->prenom,
                    "slug"=>$request->slug,
                    "pseudonyme"=>$request->pseudonyme,
                ];


                event(new onBoutiquecreate($content));
            }else{
                return redirect('nym/boutique')->with(['reponse'=>"Erreur lors de l'enregistrement"]);
            }
            return redirect('nym/boutique')->with(['reponse'=>'Succès un email à été envoyé au commerçant pour ses identifiants']);
        }else{
            return redirect('nym/boutique')->with(['reponse'=>"Erreur lors de l'enregistrement"]);
        }
    }



    function prodUpdateView($slug,$prod){
        $produit=produit::find($prod);

        return view("dashboard.produit.modproduit",compact('produit'));
    }



    function prodUpdate(ProduitRequest $request,$slug,$prod){
        $produit=produit::find($prod);
        $produit->update($request->all());
        return redirect("produpdate/".$prod)->with(["reponse"=>'Modification réussi!']);
    }


    function delprod(Request $request){
        foreach ($request->except('_token') as $prod){
            $produit=produit::find($prod);
            $produit->delete();
        }
        return redirect("dashboard/produitlist")->with(["reponse"=>'Produit(s) sepprimé(s)']);
    }



    function upload_theme(Request $request){
        $request->theme->storeAs($request->boutique.'/themes','onupload.zip','themes_path');
       if ( unzipTemplate(themes_path()->path($request->boutique.'/themes/onupload.zip'),themes_path()->path($request->boutique.'/themes'))){
           themes_path()->delete($request->boutique.'/themes/onupload.zip');
       }
        return redirect('dashboard/market');
    }



    function upload_theme_to_market(Request $request){
        $request->theme->storeAs('themes','onupload.zip','theme_market_path');
        if ( unzipTemplate(Storage::disk('theme_market_path')->path('themes/onupload.zip'),Storage::disk('theme_market_path')->path('themes'))){
            Storage::disk('theme_market_path')->delete('themes/onupload.zip');
        }
        return redirect('nym/theme')->with(["reponse"=>"Theme ajouter avec succés"]);
    }



    function changeTheme(Request $request,$slug,$theme){
        $active=Auth::user()->boutique->template;
        if ($active->update(['template'=>$theme])){
            return redirect('dashboard/market');
        }
    }
    function  deltheme(Request $request,$slug,$theme){
        File::deleteDirectory(themes_path()->path(Auth::user()->boutique->id.'/themes/'.$theme));
        return redirect("dashboard/market")->with(["reponse"=>"Theme supprimé"]);

    }


    function  theme_download($slug,$theme){

        File::copyDirectory(market_path()->path('themes/'.$theme),themes_path()->path(Auth::user()->group->boutique->id."/themes/".$theme));
        return redirect('dashboard/market')->with(["reponse"=>"Theme ajouter avec succès"]);
    }





    function loadmedia(Request $request){
        $request->media->store(Auth::user()->group->boutique_id.'/images','themes_path');
        return redirect('dashboard/phototeque')->with(["reponse"=>'succès!']);
     }
     function  delmedia(Request $request){
         themes_path()->delete($request->media);
         return redirect('dashboard/phototeque')->with(["reponse"=>'Media supprimé']);
     }

     function addAnnexe(Request $request){
         $donn=$request->all();
         $donn['boutique_id']=Auth::user()->group->boutique->id;
         boutiqueAnnexe::create($donn);
         return redirect('dashboard/dash');
     }
     function delboutique($id){
        $boutique=boutique::find($id);
        $group=$boutique->group;
     }

     function demande(Request $request){
        $data=$request->all();
        demande_boutique::create($data);
        return redirect('/')->with(["reponse"=>"Votre demande à été envoyer.Nous vous contacterons pour le processus d'ouverture"]);
     }
     function RejetDemande($id){

     }
}
