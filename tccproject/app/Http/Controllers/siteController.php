<?php

namespace App\Http\Controllers;

use App\Http\Requests\agendamentosRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\agendamento;
use App\Models\enviroments;
use App\Models\equipments;
use App\Models\Users;


class siteController extends Controller
{

     /**Agendar controller**/

    public function agendar(request $request)
    { 
        $enviroments = enviroments::all();
        $equipments = equipments::all();

        return view('/user/agendar', compact('enviroments', 'equipments'));
    }

    public function store(agendamentosRequest $request)
    {
        request()->validate(agendamento::$rules);
        agendamento::create($request->all());
            
        return back()
            ->with('success', 'Seu agendamento foi salvo!');  
        
    }

    public function show(Request $request){
        $agendamentos = agendamento::all();
        $agendJSON = json_encode($agendamentos);

        return $agendJSON;
    }

 
    /**Outros**/

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
