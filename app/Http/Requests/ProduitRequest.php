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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom'=>"required|integer",
            'prix'=>"required|integer",
            'categorie_id'=>"required|integer",
            'prix_promo'=>"required|integer",
            'disponibilite'=>"required|integer",
            'description'=>"required|integer",
            'image1'=>"required|image",
            'image2'=>"required|image",
            'image3'=>"required|image",
        ];
    }
}
