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
        
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ], 
        [

            'email.required' => 'E-mail é obrigatório',
            'password.required' => 'Senha é obrigatório',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
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
