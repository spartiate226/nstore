<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coursierController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request,$pseudo,$page)
    {
        switch ($page) {
            case 'home':
                return view("1livreur.livreurboard.accueil");
                break;
            case 'wallet':
                return view("1livreur.livreurboard.wallet");
                break;
            case 'withdraw':
                return view("1livreur.livreurboard.withdraw");
                break;
            case 'detail':
                return view("1livreur.livreurboard.detail");
                 break;
            case 'checkout':
                return view("1livreur.livreurboard.checkout");
                break;

            default:

                break;
        }
    }
}
