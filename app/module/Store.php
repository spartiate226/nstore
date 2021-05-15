<?php


namespace App\module;


use App\boutique;
use App\categorie;
use App\produit;
use Illuminate\Support\Facades\Storage;

class Store
{

    /**
     * Store constructor.
     */
    private $boutique;
    public $slug;
    private $setting;
    private $themeConfig;
    public function __construct($slug)
    {
        $this->slug=$slug;
        $primbou=boutique::where('slug',"=",$slug)->get();
        $this->boutique=$primbou['0'];
        $this->setting=new setting($this->boutique);
        $this->themeConfig=$this->setting->getConfig();
    }
    public function info(){
        return $this->boutique;
    }
    function url($url,$params=[]){
        return url($url,$params);
    }




 //Products functions
    function getProducts($paginate=null){
        if ($paginate==null){
            return produit::where('boutique_id',"=",$this->boutique->id)->get();
        }else{
            return produit::where('boutique_id',"=",$this->boutique->id)->paginate($paginate);
        }
    }
    function getProduct($id){
        return produit::find($id);
    }
    function getProductBy($id,$paginate=15){
        return produit::where('categorie_id',"=",$id)->paginate($paginate);
    }
    function category($id=null){
        if ($id==null){
            return categorie::where('boutique_id',"=",$this->boutique->id)->get();
        }else{
           return categorie::find($id);
        }
        return null;
    }


    function filter($bycategorie,$byprice='',$bydate=''){
        categorie::find($bycategorie)->produits;
    }
    function searchProduct(){

    }


//Cart functions
    function cart_add_item($product=null,$quantity=1){
        return url('cart/addItem?boutique_id='.$this->boutique->id."&quantite=".$quantity."&id=".$product);
     }
    function cart_erase(){
        return url('cart/erasecart/?boutique_id='.$this->boutique->id);
    }
     function cart_delete_item($prod){
         return url('cart/delItem/?boutique_id='.$this->boutique->id."&id=".$prod);
     }

     function cart_items($count=false){
        if(session()->exists("panier-". $this->boutique->id)){
            if($count==true){
                $number=session('panier-'.$this->boutique->id);
                if($number!=null){
                   return count(session('panier-'.$this->boutique->id));
                }
                return 0;
            }
           return session('panier-'.$this->boutique->id);
        }
        return 0;
        }

        function cart_total(){
            $somme=0;
        if(session()->exists("panier-". $this->boutique->id)){
        foreach (session('panier-'.$this->boutique->id) as $item){
            $prod=\App\produit::find($item['id']);
            $somme+=($prod->prix*$item['quantite']);
        }
        return $somme;
       }
       return 0;
        }

        function cart_total_byItem()
        {
            $newitems = [];
            if (session('panier-'.$this->boutique->id)) {
                $items = session('panier-' .$this->boutique->id);
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








   //assets functions


     function Topcss(){
         foreach($this->themeConfig->afterstyle->style as $link){
             ?>
             <link rel="stylesheet" href="<?php echo $this->templatepath()."".$link?>">
             <?php
         }
     }

     function Topjs(){
        foreach($this->themeConfig->afterstyle->script as $link){
            ?>
            <script src="<?php echo $this->templatepath()."".$link?>"></script>
            <?php
        }
     }

    function Bottomjs(){
        foreach($this->themeConfig->afterscript as $link){
            ?>
            <script src="<?php echo $this->templatepath()."".$link?>"></script>
            <?php
        }
     }

    function templatepath(){
        return Storage::disk('themes_path')->url($this->boutique->id."/themes/".$this->boutique->template->template.'/');
    }

    function imagespath(){
        return Storage::disk('themes_path')->url($this->boutique->id."/images/");
    }

    //config value

    function controlervalue($control,$setting,$section){
        return $this->setting->control($control,$setting,$section)->value;
    }

    function toprated($number){

    }
    function featured($number){

    }

    function best_sales($number){

    }
    function new_product($number){
        $prod=produit::where("boutique_id","=",$this->boutique->id)->orderby("created_at","desc")->paginate($number);
        return $prod;
    }

    function promo($number){

    }

    function product_comments($product_id){
        $produit=produit::find($product_id);
        return $produit->comments->paginate(10);
    }

    function product_rates($product_id){
        $produit=produit::find($product_id);
        return $produit->rates->paginate(10);
    }

    function product_rates_average($product_id){
        $produit=produit::find($product_id);
        $somm=0;
        /*foreach ($produit->rates as $rate){
            $somm=$somm+$rate->note;
        }*/
        return 0;
    }
}
