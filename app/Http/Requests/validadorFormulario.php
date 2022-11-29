<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorFormulario extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //Requerimientos libro
            'txtIsbn' => 'required|min_digits:13|numeric',
            'txtTitulo' => 'required',
            'txtAutor' => 'required',
            'txtPaginas' => 'required|numeric',
            'txtEditorial' => 'required',
            'txtEmail' => 'required|email',
            
            'txtNombre' => 'required|min:4|string',
            'txtIne' => 'required|min_digits:10|numeric'
        ];
    }
}
