<?php

namespace App\Http\Controllers;

use App\Http\Requests\agendamentosRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\agendamento;
use App\Models\enviroments;
use App\Models\equipments;
use Illuminate\Support\Facades\Validator;

class agendamentosController extends Controller
{
    public function view()
    {
        $enviroments = enviroments::all();
        $equipments = equipments::all();
    
        if(auth()->user()->admin === 0){
            $agendamentos = agendamento::where('userId', auth()->user()->id)->where('start', '>=', date("Y-m-d"))->orderby('start', 'asc')->get();
            return view('user/agendamentos', compact('enviroments', 'equipments', 'agendamentos'));
        }
        else{
            $agendamentos = agendamento::where('start', '>=', date("Y-m-d"))->orderby('start', 'asc')->get();
            return view('user/agendamentos', compact('enviroments', 'equipments', 'agendamentos'));
        }
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


    public function update(agendamentosRequest $request, $id)
    {
        request()->validate(agendamento::$rules);
        $agendamentos = agendamento::find($id);
        $data = $request->all();
        $ambienteVerify = $request->get('ambiente');
        $recursoVerify = $request->get('recurso');
        $retiradaVerify = $request->get('retirada');
        $entregaVerify = $request->get('entrega');
        $verifyRecurso =  $this->verifyRecurso($request);
        $verifyAmbiente =  $this->verifyAmbiente($request);

        //verifica se tem entrega e retirada
        if($retiradaVerify === null && $entregaVerify === null){
            return back()
            ->withErrors('Selecione uma aula de retirada e de entrega!');
        };

        //verifica se tem um recurso ou ambiente
        if($ambienteVerify === null && $recursoVerify === null){
            return back()
            ->withErrors('Selecione um recurso ou ambiente!');
        }

          
        if($verifyRecurso == true ){

            return back()
            ->withErrors('Já há um agendamento com esse Recurso nesse horário!');

        }elseif($verifyAmbiente == true ){

            return back()
            ->withErrors('Já há um agendamento com esse Ambiente nesse horário!');

        }elseif($verifyRecurso == null && $verifyAmbiente === null){
            $agendamentos->fill($data)->update();
             return back()->with(['success' => 'Agendamento editado com sucesso!']);
        }
    }

    public function destroy($id)
    {
        $agendamentos = agendamento::find($id);
        $agendamentos->delete();
        if ($agendamentos) {
            return redirect()->route('agendamentos.view')
                ->with(['success' => 'Agendamento deletado com sucesso!']);
        }
    }
}
