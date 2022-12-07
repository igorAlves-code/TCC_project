<?php

namespace App\Http\Controllers;

use App\Http\Requests\agendamentosRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\agendamento;
use App\Models\enviroments;
use App\Models\equipments;
use App\Models\Users;
use Illuminate\Support\Collection;


class siteController extends Controller
{

     /**Agendar controller**/

    public function agendar(request $request)
    { 
        $enviroments = enviroments::all();
        $equipments = equipments::all();

        return view('/user/agendar', compact('enviroments', 'equipments'));
    }

//Verificações
public function verifyRecurso($request){

    $recursoVerify = $request->get('recurso');
    $dateVerify = $request->get('start');
    $retiradaVerify = $request->get('retirada');
    $devolucaoVerify = $request->get('devolucao');
    $agendamentosVerify = agendamento::all();

    foreach($agendamentosVerify as $agendamento){
        if($agendamento->start == $dateVerify){
            if($agendamento->retirada == $retiradaVerify){
                if($agendamento->recurso == null){
                    return null;
                }elseif($agendamento->recurso == $recursoVerify){
                    return true;
                }
                }elseif($agendamento->devolucao == $devolucaoVerify){
                    if($agendamento->recurso == null){
                        return null;
                    }elseif($agendamento->recurso == $recursoVerify){
                        return true;
                    }
                };
                
            };
        };
    }


    public function verifyAmbiente($request){

        $ambienteVerify = $request->get('ambiente');
        $dateVerify = $request->get('start');
        $retiradaVerify = $request->get('retirada');
        $devolucaoVerify = $request->get('devolucao');
        $agendamentosVerify = agendamento::all();
    
        foreach($agendamentosVerify as $agendamento){
            if($agendamento->start == $dateVerify){
                if($agendamento->retirada == $retiradaVerify){
                    if($agendamento->ambiente == null){
                        return null;
                    }elseif($agendamento->ambiente == $ambienteVerify){
                        return true;
                    }
                    }elseif($agendamento->devolucao == $devolucaoVerify){
                        if($agendamento->ambiente == null){
                            return null;
                        }elseif($agendamento->ambiente == $ambienteVerify){
                            return true;
                        }
                    };
                };
            };
        }


    //Agendar
    public function store(agendamentosRequest $request)
    {
        request()->validate(agendamento::$rules);
        $ambienteVerify = $request->get('ambiente');
        $recursoVerify = $request->get('recurso');
        $retiradaVerify = $request->get('retirada');
        $devolucaoVerify = $request->get('devolucao');
        $verifyRecurso =  $this->verifyRecurso($request);
        $verifyAmbiente =  $this->verifyAmbiente($request);

        //verifica se tem devolucao e retirada
        if($retiradaVerify === null && $devolucaoVerify === null){
            return back()
            ->withErrors('Selecione uma aula de retirada e de devolução!');
        };

        //verifica se tem um recurso ou ambiente
        if($ambienteVerify === null && $recursoVerify === null){
            return back()
            ->withErrors('Selecione um recurso ou ambiente!');
        };

        //verifica disponibilidade 

        if($verifyRecurso == true ){

            return back()
            ->withErrors('Já há um agendamento com esse Recurso nesse horário!');

        }elseif($verifyAmbiente == true ){

            return back()
            ->withErrors('Já há um agendamento com esse Ambiente nesse horário!');

        }elseif($verifyRecurso == null && $verifyAmbiente === null){

            agendamento::create($request->all());
            return back()
            ->with('success', 'Seu agendamento foi salvo!');

        };

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
