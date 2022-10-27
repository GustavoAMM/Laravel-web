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
            'txtTitulo'=>'required',
            'txtAutor'=>'required',
            'txtPaginas'=>'required|numeric',
            'txtEditorial'=>'required',
            'txtEmail'=>'required|email',
            'txtIsbn'=>'numeric|required|min:13'
        ];
    }
}
