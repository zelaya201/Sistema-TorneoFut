<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //

    public function show() {
        return view('auth.login');
    }

    public function login(Request $request, Redirector $redirect) {
        $user = Usuario::where('nickname', $request->user)->first();
    

        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();

            return redirect('/home');
        }
        
        /* $credenciales = $request->getCredenciales();

        dd($credenciales);

        if (!Auth::validate($credenciales)) {
            return redirect()->to('/login')->withErrors('auth.failed');
        }

        $usuario = Auth::getProvider()->retrieveByCredentials($credenciales);

        Auth::login($usuario);

        return $this->authenticated($request, $usuario); */
    }

    public function authenticated(Request $request, $usuario) {
        return redirect('/home');
    }
}
