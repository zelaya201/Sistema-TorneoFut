<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'nick_usuario' => 'required', // Campo requerido
            'pass_usuario' => 'required',
        ];
    }

    public function getCredenciales() {
        /* Se obtienen los campos de la bd */
        $nick = $this->get('user');
        $pass = $this->get('password');

        /* Se retornan los campos */
        return $this->only($nick, $pass);
    }
}
