<?php
$categorie=[];
function the_categorie($filtre=[]){

}


function get_categorie($id){
return \App\boutique::find($id)->categorie;
}
