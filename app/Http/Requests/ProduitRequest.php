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
}
