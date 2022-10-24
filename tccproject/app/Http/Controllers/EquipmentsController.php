<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeUpdateEquipmentsFormRequest;
use App\Models\equipments;
use Illuminate\Http\Request;

class equipmentsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $equipments = equipments::where(function ($query) use ($search) {
            if ($search) {
                $query->where('tipoEquipamento', 'LIKE', "%{$search}%");
            }
        })->get();
        return view('admin.equipments', compact('equipments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeUpdateEquipmentsFormRequest $request)
    {
        $equipments = equipments::create($request->all());
        if ($equipments) {
            return redirect()->route('equipments.index')
                ->with(['success' => 'Cadastro realizado com sucesso!']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(storeUpdateEquipmentsFormRequest $request, $id)
    {
        $equipments = equipments::find($id);
        $data = $request->all();
        $equipments->fill($data)->update();
        if ($equipments) {
            return redirect()->route('equipments.index')
                ->with(['success' => 'Edição realizada com sucesso!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipments = equipments::find($id);
        $equipments->delete();
        if ($equipments) {
            return redirect()->route('equipments.index')
                ->with(['success' => 'Exclusão realizada com sucesso!']);
        }
    }
}
