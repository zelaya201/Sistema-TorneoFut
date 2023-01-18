<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Organizador;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario, $url)
    {
        /* Obteniendo datos para el usuario */
        $usuario->nickname = $request->usuario;
        
        if ($request->switch) {
            $usuario->password = $request->newPassword;
        }

        $usuario->save();

        /* Obteniendo datos para el organizador */
        $organizador = Organizador::find($usuario->organizador->id);
        
        $organizador->nombre = $request->nombre;
        $organizador->apellido = $request->apellido;
        $organizador->fecha_nacimiento = $request->f_nacimiento;
        $organizador->genero = $request->genero;
        $organizador->telefono = $request->tel;
        $organizador->email = $request->email;

        $organizador->save();

        toastr()->success('El usuario ha sido modificado correctamente.', 'Usuario actualizado con éxito') ;

        return redirect('/'.$url);
    }

    /* public function userDown(Request $request, Usuario $usuario, $url)
    {
        
    } */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Usuario $usuario)
    {
        /* Obteniendo datos para el usuario */
        $usuario->estado = 0;
        
        $usuario->save();

        Auth::guard()->logout();

        // invalidamos su sesión
        $request->session()->invalidate();

        toastr()->success('El usuario ha sido dado de baja correctamente.', 'Usuario fuera del sistema') ;

        return redirect('/');

        /*
        // cerramos su sesión
    Auth::guard()->logout();

    // invalidamos su sesión
    $request->session()->invalidate();

    // redireccionamos a donde queremos
    redirect('/ruta-para-usuario-desactivado');*/
    }
}
