<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeUpdateEnviromentsFormResquest;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Http\Request;
use App\Models\enviroments;

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
        })->get();
        return view('admin.enviroments', compact('enviroments'));
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
                ->with(['success' => 'Cadastro realizada com sucesso!']);
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
        $enviroments = enviroments::find($id);
        $enviroments->delete();
        if ($enviroments) {
            return redirect()->route('enviroments.index')
                ->with(['success' => 'Exclusão realizada com sucesso!']);
        }
    }
}
