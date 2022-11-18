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

    public function update(agendamentosRequest $request, $id)
    {
        request()->validate(agendamento::$rules);
        $agendamentos = agendamento::find($id);
        $data = $request->all();

        $agendamentos->fill($data)->update();

        if ($agendamentos) {
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
