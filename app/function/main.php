<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

function account(){
     return new \App\module\account();
}
function cart(){
 return new \App\module\Cart();
}
function product(){
 return new \App\module\Product();
}
function tool(){
 return new \App\module\Tool();
}
//function conf(){
//    $set=new \App\module\setting();
//    return $set->getConfig();
//}
function roles(){
    return \App\role::all();
}


function getThemeDetail($path){
    $config=json_decode(themes_path()->get($path.'/config.json'));
    return [
        "image"=>$path.'/screenshot.png',
        "author"=>$config->info->Author,
        "name"=>$config->info->Name,
        "version"=>$config->info->Version
    ];
}

function MarketThemeDetail($path){
    $config=json_decode(market_path()->get($path.'/config.json'));
    return [
        "image"=>Storage::disk("theme_market_path")->url($path.'/screenshot.png'),
        "author"=>$config->info->Author,
        "name"=>$config->info->Name,
        "version"=>$config->info->Version
    ];
}

function getfilename($path){
    $file=pathinfo($path);
    return $file['filename'];
}

function list_themes($store_id){
    return themes_path()->directories($store_id.'/themes');
}
function market_themes(){
    return Storage::disk("theme_market_path")->directories('themes');
}


function market_path(){
   return Storage::disk('theme_market_path');
}

function themes_path(){
   return Storage::disk('themes_path');
}
function template_path($fil,$boutique){
    if (!themes_path()->exists($boutique->id.'/themes/'.$boutique->template->template.'/'.$fil.'.php')){
        echo '<h1>Not found</h1>';
    }
    return themes_path()->path($boutique->id.'/themes/'.$boutique->template->template.'/'.$fil.'.php');
}
function packs_fonctionnnalite(){
    return \App\fonctionnalite::all();
}
function packs(){
    return \App\pack::all();
}

function unzipTemplate($from,$to){
    $zip=new ZipArchive();
    if ($zip->open($from)===TRUE){
       $extract=$zip->extractTo($to);
        //$zip->close();
       return $zip;
    }else{
       return false;
    }
}

function controlBlock($control,$control_label,$setting_label,$section_label){
    switch ($control->type){
        case "text":
            ?>
        <input data-control="<?php echo $control_label ?>" data-setting="<?php echo $setting_label ?>" data-section="<?php echo $section_label ?>" class="form-control customizer-field" type="text" value="<?php echo $control->value?>">
<?php
            break;
        case "image":
            ?>
            <input readonly id="<?php echo $section_label ?>trigrer" data-control="<?php echo $control_label ?>" value="<?php echo $control->value?>" data-setting="<?php echo $setting_label ?>" data-section="<?php echo $section_label ?>" class="mediaSelector form-control customizer-field" type="text" data-toggle="modal"  data-target="#<?php echo $section_label ?>target">


            <!-- Modal -->
            <div class="modal fade" id="<?php echo $section_label ?>target" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Phototèque</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body row">
                            <?php
                            foreach (getMedia(Auth::user()->group->boutique_id) as $image){
                                ?>
                            <div class="col-md-3 p-1">
                                <div>
                                    <img src="<?php echo themes_path()->url($image)?>" style="width: 100%;height:150px">
                                    <button class="mediafile btn btn-secondary w-100 mt-1" data-dismiss="modal" data-trig="<?php echo $section_label ?>trigrer"  data-path="<?php echo themes_path()->url($image)?>">choisir</button>
                                </div>
                            </div>
                                 <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            break;
        case "list":
            ?>
        <select data-control="<?php echo $control_label ?>" data-setting="<?php echo $setting_label ?>" data-section="<?php echo $section_label ?>" class="form-control customizer-field">
            <?php
            foreach ($control->opt as $label=>$option){
                ?>
                <option value="<?php echo $option?>"><?php echo $option?></option>
        <?php
            }
            ?>
        </select>
<?php
            break;
        case "color":
            ?>

            <input data-control="<?php echo $control_label ?>" data-setting="<?php echo $setting_label ?>" data-section="<?php echo $section_label ?>" class="form-control customizer-field" type="color" value="<?php echo $control->value?>">
        <?php
            break;
            ?>

        <?php
        default:

            break;
    }
}

function LoginForm(){
    ?>
    <form action="<?php echo url('client/login') ?>" method="post" class="" id="login_form" style="">
        <?php echo csrf_field() ?>
        <div class="form-group" style="">
            <label id="login-pseudo-label" class="" style="">Pseudonyme</label>
            <input id="login-pseudo-field" name="pseudonyme" class="form-control" style="">
        </div>
        <div class="form-group" style="">
            <label id="login-pwd-label" class="" style="">Mot de passe</label>
            <input id="login-pwd-field" name="password" class="form-control" style="">
        </div>
        <div class="form-group" style="">
            <button id="login-btn" type="submit">Connexion</button>
        </div>
    </form>
<?php
}
function RegisterForm(){
?>
    <form action="<?php echo url('client/register') ?>" method="post" class="" id="login_form" style="">
        <?php echo csrf_field() ?>
        <div class="form-group" style="">
            <label id="register-name-label" class="" style="">Nom</label>
            <input id="register-name-field" name="nom" class="form-control" style="">
        </div>
        <div class="form-group" style="">
            <label id="register-fistname-label" class="" style="">Prenom</label>
            <input id="register-fistname-field" name="prenom" class="form-control" style="">
        </div>
        <div class="form-group" style="">
            <label id="register-pseudo-label"  class="" style="">Pseudonyme</label>
            <input id="register-pseudo-field" name="pseudonyme" class="form-control" style="">
        </div>
        <div class="form-group" style="">
            <label id="register-tel-label" class="" style="">Numero</label>
            <input id="register-tel-field" name="numero" class="form-control" style="">
        </div>
        <div class="form-group" style="">
            <label id="register-pwd-label" class="" style="">Mot de passe</label>
            <input id="register-pwd-field" name="password" class="form-control" style="">
        </div>
        <div class="form-group" style="">
            <label id="register-confirm-pwd-label" class="" style="">Confirmer le mot de passe</label>
            <input id="register-confirm-pwd-field" name="password-confirm" class="form-control" style="">
        </div>
        <div class="form-group" style="">
            <button id="register-btn" type="submit">S'inscrire</button>
        </div>
    </form>
<?php
}

function checkoutForm(){

}

function getMedia($id){
    return themes_path()->files($id."/images");
}


function villes(){
    return \App\ville::all();
}
function zones(){
    return \App\zone::all();
}
function quartiers(){
    return \App\quartier::all();
}


function pays(){
    return \App\pays::all();
}
