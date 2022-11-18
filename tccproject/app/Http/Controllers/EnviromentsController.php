<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeUpdateEnviromentsFormResquest;
use Illuminate\Http\Request;
use App\Models\enviroments;
use Illuminate\Support\Facades\Gate;

class enviromentsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $enviroments = enviroments::where(function ($query) use ($search) {
            if ($search) {
                $query->where('tipoAmbiente', 'LIKE', "%{$search}%");
            }
        })->paginate(3);
        if (Gate::denies('admin')){
            return redirect()->back();
        }
        else{
            return view('admin.enviroments', compact('enviroments'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeUpdateEnviromentsFormResquest $request)
    {
        $enviroments = enviroments::create($request->all());
        if ($enviroments) {
            return redirect()->route('enviroments.index')
                ->with(['success' => 'Ambiente cadastrado com sucesso!']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(storeUpdateEnviromentsFormResquest $request, $id)
    {
        $enviroments = enviroments::find($id);
        $data = $request->all();
        $enviroments->fill($data)->update();
        if ($enviroments) {
            return redirect()->route('enviroments.index')
                ->with(['success' => 'Ambiente editado com sucesso!']);
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
        $enviroments = enviroments::find($id);
        $enviroments->delete();
        if ($enviroments) {
            return redirect()->route('enviroments.index')
                ->with(['success' => 'Ambiente deletado com sucesso!']);
        }
    }
}
