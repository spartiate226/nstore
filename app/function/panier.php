<?php
function cart_add_item(){

}

function get_cart_items(){
return session('panier-'.session('boutique_id'));
}

function cart_total(){
    $somme=0;
foreach (session('panier-'.session('boutique_id')) as $item){
    $prod=\App\produit::find($item['id']);
    $somme+=($prod->prix*$item['quantite']);
}
return $somme;
}

function cart_total_byItem()
{
    $newitems = [];
    if (session('panier-' . session('boutique_id'))) {
        $items = session('panier-' . session('boutique_id'));
        foreach ($items as $key => $item) {
            if ($key != 'boutique_id') {
                $prod = \App\produit::find($item['id']);
                $newitems[$key]['total'] = $item['quantite'] * $prod->prix;
                $newitems[$key]['quantite'] = $item['quantite'];
                $newitems[$key]['id'] = $item['id'];
            }
        }
    }
    return $newitems;

}
function cart_del_item(){

}

function cart_maj_item(){

}
