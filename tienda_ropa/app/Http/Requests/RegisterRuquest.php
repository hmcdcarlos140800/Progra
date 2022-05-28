<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRuquest extends FormRequest
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
    //Validaciones para el registro
    public function rules()
    {
        return [
            'Nombre_usuario'=> 'required|unique:users,Nombre_usuario',//aqui es requerido el campo y tiene que ser unico el valor en todos los Nombre_usuarios en la tabla users
            'password'=>'required|min:8',//aqui es requerido el campo y tiene que tener minimo 8 caracteres
            'password_confirmation'=> 'required|same:password', //aqui es requerido y tiene que ser igual al campo password
        ];
    }
}
