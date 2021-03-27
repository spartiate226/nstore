<?php

use Illuminate\Support\Facades\Storage;

function image_url($url){

}

function template_page($page,$store,$that,$params=null){

    switch ($page){
        case "frontpage" :
            require_once(template_path('frontpage',$store));
            break;
        case "category" :
            require_once(template_path('category',$store));
            break;
        case "product" :
            require_once(template_path('product',$store));
            break;
        case "single" :
            require_once(template_path('single',$store));
            break;
        case "login" :
            require_once(template_path('login',$store));
            break;
        case "signup" :
            require_once(template_path('signup',$store));
            break;
        case "cart" :
            require_once(template_path('cart',$store));
            break;
        case "checkout" :
            require_once(template_path('checkout',$store));
            break;
        case "404" :
            require_once(template_path('404',$store));
            break;
        default:
            break;
    }
}

function page_url($url){
return url($url);
}

function store_url($choice,$id){
    switch ($choice){
        case 'theme_path':
            return Storage::disk('themes_path')->path($id."/themes");
            break;
        case 'image_path':
            return Storage::disk('themes_path')->path($id."/images");
            break;
        case 'current_template':
            $boutique=\App\boutique::find($id);
            return Storage::disk('themes_path')->path($id."/themes/".$boutique->template->template);
            break;
    }
}
 function add_to_cart($product=null,$quantity=null){
    if ($product!=null){
        return url('addItem/?boutique_id='.session('boutique_id')."&quantite=".$quantity."&id=".$product);
    }
  return url('addItem?boutique_id='.session('boutique_id'));
 }
function erase_cart(){
    return url('erasecart/?boutique_id='.session('boutique_id'));
}
 function delete_cart_item($prod){
     return url('delItem/?boutique_id='.session('boutique_id')."&id=".$prod);
 }


