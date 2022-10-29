<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\agendamento;
use App\Models\enviroments;
use App\Models\equipments;

class siteController extends Controller
{

     /**Agendar controller**/

    public function agendar(request $request)
    {
        $agendamento = agendamento::all(); 
        $enviroments = enviroments::all();
        $equipments = equipments::all();
        return view('/user/agendar', compact('enviroments', 'equipments'));
    }

    public function store(Request $request)
    {
    request()->validate(agendamento::$rules);
    $agendamento = agendamento::create($request->all());

    return back()
        ->with('success', 'Seu agendamento foi salvo!');
    }


    /**Geral controller**/

    public function agendamentos()
    {
     return view('/user/agendamentos');
    }

    public function coordenacao()
    {
    if (Gate::denies('admin')){
        return redirect()->back();
    }
    else{
       return view('admin/index');
    }

    }
}
