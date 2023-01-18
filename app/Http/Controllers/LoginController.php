<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function show() {
        return view('auth.login');
    }

    public function login(Request $request, Redirector $redirect) {
        $user = Usuario::where('nickname', $request->user)
                        ->where('estado', 1)
                        ->first();
        
        if (!empty($user)) {
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
                $request->session()->regenerate();
    
                toastr()->info('Que disfrutes del sistema.','¡Bienvenido/a, '. $user->organizador->nombre . '!') ;
    
                return redirect('/Torneos');
            }else {
                toastr()->error('Contraseña incorrecta.','Credenciales incorrectas') ;
                return redirect('/');
            }
        }else {
            toastr()->error('Usuario y/o contraseña incorrectos.','Credenciales incorrectas') ;
            //return redirect('/')->with('error', 'Usuario y/o contraseña incorrectos');
            return redirect('/');
        }

        /* if (Hash::check($request->password, $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();

            toastr()->info('Que disfrutes del sistema.','¡Bienvenido/a, '. $user->organizador->nombre . '!') ;

            return redirect('/Torneos');
        }else {
            return redirect('/');
        } */
    }

    public function authenticated(Request $request, $usuario) {
        return redirect('/Torneos');
    }
}
