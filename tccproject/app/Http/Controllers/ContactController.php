<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\sendMail;

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
    public function store(Request $request)
    {
        $request->validate([
            'data' => 'required',
            'nome' => 'required',
            'ocorrencia' => 'required'
        ]);

        $data = array(
            'data' => $request->data,
            'nome' => $request->nome,
            'ocorrencia' => $request->ocorrencia
        );

        Mail::to(config('mail.from.address'))
            ->send( new SendMail($data));

            return back()
                    ->with('success', 'Sua ocorrência foi enviada.');

    }
}
