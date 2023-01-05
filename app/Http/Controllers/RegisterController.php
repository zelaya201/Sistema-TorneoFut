<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Organizador;
use App\Models\Usuario;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show() {
        return view('auth.register');
    }

    public function register(RegisterRequest $request) {
        /* Se almacena el organizador */
        $organizador = new Organizador();
        $organizador->nombre = $request->nombre;
        $organizador->apellido = $request->apellido;
        $organizador->fecha_nacimiento = $request->f_nacimiento;
        $organizador->genero = $request->genero;
        $organizador->telefono = $request->tel;
        $organizador->email = $request->email;

        $organizador->save();

        $usuario = new Usuario();
        $usuario->nickname = $request->usuario;
        $usuario->password = $request->pass;
        $usuario->id_organizador = $organizador->id;

        $usuario->save();

        //$usuario = Usuario::create($request->validated());


        toastr()->info('Ya puedes iniciar sesión en el sistema','Usuario registrado correctamente') ;


        return redirect('/');
    }
}
