<?php

namespace App\Http\Controllers;

use App\Providers\AuthServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Bootstrap\BootProviders;
use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Notifications\ResetPassword;

class userControl extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {

        $credenciais = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ],
            [
                'email.required' => 'Email é obrigatório',
                'email.email' => 'O Email não é válido',
                'password.required' => 'Senha é obrigatório',
            ]
        );

        if (Auth::attempt($credenciais, $request->remember)) {
            $request->session()->regenerate();
            return redirect('/agendar');
        } else {
            return redirect()->back()->with('danger', 'E-mail ou senha inválida');
        }
    }


    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function sendEmailVerification(Request $request) {
        $request->user()->sendEmailVerificationNotification();
 
        return back()->with('success', 'Um novo link de verificação já foi enviado para o email registrado!');
    }

    // public function sendEmailResetPassword ($token) {
    //     $url = 'http://127.0.0.1:8000/change-password?token='.$token;
 
    //     $this->notify(new ResetPassword($url));
    // }
}
