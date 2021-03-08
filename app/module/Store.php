<?php


namespace App\module;


use App\boutique;

class Store
{

    /**
     * Store constructor.
     */
    private $boutique;
    private $slug;
    public function __construct($slug)
    {
        $this->slug=$slug;
        $primbou=boutique::where('slug',"=",$slug)->get();
        $this->boutique=$primbou['0'];
    }
    public function info(){
        return $this->boutique;
    }
    function url($url){
        return url($url,[$this->slug]);
    }
}
