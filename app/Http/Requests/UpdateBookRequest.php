<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   public function rules()
    {
        return [
            'name'=>'required',
            'category'=>'required',
            'description'=>'required'
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'Name',
            'category'=>'Category',
            'description'=>'Description'
        ];
    }
    public function messages(){
        return [
            'required' => 'Vui long nhap o nay!',
        ];
    }
}
