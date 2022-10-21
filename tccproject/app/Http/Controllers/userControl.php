<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Session\Middleware\AuthenticateSession;

class userControl extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], 
        [
            'email.required' => 'Email é obrigatório',
            'email.email' => 'O Email não é válido',
            'password.required' => 'Senha é obrigatório',
        ]);

        if(Auth::attempt( $credenciais, $request->remember)){
            $request->session()->regenerate();
            return redirect('/agendar');
        }
        else{
         return redirect()->back()->with('danger', 'E-mail ou senha inválida');
        }
    }


    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}
}
