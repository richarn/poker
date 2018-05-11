<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ContenidoRequest extends FormRequest
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
            'compra' => 'required',
            'fecha_compra' => 'required' ,

            'pozo' => 'required',
            'propina' => 'required',
            'fecha_pozo' => 'required', 

            'billar_des' => 'required',
            'billar_precio' => 'required',
            'fecha_billar' => 'required',

            'descri_bebida' => 'required',
            'cantidad_bebida' => 'required',
            'precio_bebida' => 'required',
            'fechaR_bebida' => 'required',

            'descri_comida' => 'required',
            'cantidad_comida' => 'required',
            'precio_comida' => 'required',
            'fechaR_comida' => 'required'
        ];
    }
}
