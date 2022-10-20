<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeUpdateEnviromentsEquipmentsFormResquest;
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
        $enviroment = enviroments::where(function ($query) use ($search){
            if($search) {
                $query->where('tipoAmbiente', 'LIKE', "%{$search}%");
            }
        })->get();
        return view('admin.enviroments', compact('enviroment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeUpdateEnviromentsEquipmentsFormResquest $request)
    {
        enviroments::create($request->all());

        /* Redirecionamento */
        return redirect()->route('admin.enviroments.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(storeUpdateEnviromentsEquipmentsFormResquest $request, $id)
    {
        $enviroment = enviroments::find($id);
        $data = $request->all();
        $enviroment->fill($data)->update();
        // $enviroment->update($data);

        return redirect()->route('admin.enviroments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enviroment = enviroments::find($id);
        $enviroment->delete();

        return redirect()->route('admin.enviroments.index');
    }
}
