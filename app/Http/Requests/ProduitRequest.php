<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom'=>"required",
            'prix'=>"required|integer",
            'categorie_id'=>"required|integer",
            'prix_promo'=>"required|integer",
            'disponibilite'=>"required",
            'description'=>"required",
            'image1'=>"required",
            'image2'=>"required",
            'image3'=>"required",
        ];
    }
    public  function  messages()
    {
        return [
            'nom.required'=>"Le champ 'Nom'  est requis",
'prix.required'=>"Le champ 'Prix'  est requis",
'categorie_id.required'=>"Le champ 'Categorie' est requis",
'prix_promo.required'=>"Le champ  est requis",
'disponibilite.required'=>"Le champ 'Stock' est requis",
'description.required'=>"Le champ 'Description' est requis",
'image1.required'=>"Le champ 'Photo couverture' est requis",
'image2.required'=>"Le champ 'Photo detail 1' est requis",
'image3.required'=>"Le champ 'Photo detail 2'  est requis",
        ];
    }
}
