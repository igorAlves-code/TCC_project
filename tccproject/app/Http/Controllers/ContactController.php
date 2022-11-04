<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Mail;
use App\Mail\sendMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return view('/user/ocorrencia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        $request->validate([
            'data' => 'required',
            'nome' => 'required',
            'ocorrencia' => 'required'
        ]);

        if ($this->isOnline()) {
            $mail_data = [
                'recipient' => 'matheusborges123567@gmail.com',
                'data' => $request->data,
                'nome' => $request->nome,
                'ocorrencia' => $request->ocorrencia
            ];

            Mail::send('layouts.emails.ocorrencia', $mail_data, function($ocorrencia) use ($mail_data) {
                $ocorrencia->to($mail_data['recipient'])
                    ->from(Auth::user()->email, $mail_data['nome'])
                    ->subject('Ocorrência');
            });

            return redirect()->back()->with(['success' => 'Ocorrência enviada com sucesso!']);
        } else{
            return redirect()->back()->withInput()->with('error', "Sem conexão com a internet, tente novamente!");

        }

    }

    public function isOnline($site = 'https://youtube.com/') {
        if (@fopen($site, 'r')) {
            return true;
        } else {
            return false;

        }
        
    }

}
