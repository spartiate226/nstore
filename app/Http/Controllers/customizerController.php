<?php

namespace App\Http\Controllers;

use App\module\setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class customizerController extends Controller
{

    /**
     * customizerController constructor.
     */
    public function __construct()
    {
        $this->middleware('Roleverifier:3');
    }

    function customizer(Request $request)
    {
        $setting = new setting(Auth::user()->boutique);
        $config = $setting->getConfig();
        $setting->control($request->control, $request->setting, $request->section)->value = $request->val;

        if ($request->ajax()) {
            themes_path()->put(Auth::user()->boutique->id.'/themes/'.Auth::user()->boutique->template->template.'/config.json',json_encode( $config) );
           // return response()->json('true');
        }
    }
}
