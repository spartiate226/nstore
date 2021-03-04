<?php


namespace App\module;


use App\boutique;
use Illuminate\Support\Facades\Storage;

class setting
{

    /**
     * setting constructor.
     */
    private $boutique;
    private $config;
    public function __construct(boutique  $boutique)
    {
        $this->boutique=$boutique;
        $this->config=json_decode(themes_path()->get($boutique->id.'/themes/'.$boutique->template->template.'/config.json'));
    }

    function val($param){

    }
    function section($id){
        return $this->config->customizer->sections->$id;
    }
    function getSections(){
        return $this->config->customizer->sections;
    }

    function setting($id,$section_id){
        return $this->section($section_id)->settings->$id;
    }
    function sectionSettings($section_id){
        $section=$this->section($section_id);
        return $section->settings;
    }
    function settingControls($setting_id,$section_id){
        $setting=$this->setting($setting_id,$section_id);
        return $setting->controls;
    }
    function control($id,$setting_id,$section_id){
        return $this->setting($setting_id,$section_id)->controls->$id;
    }


    public function getConfig()
    {
        return $this->config;
    }


}
