<?php
namespace App\Http\Controllers;

use App\Http\Requests\storeUpdateManagementsFormRequest;
use App\Models\managements;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class managementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $managements = managements::get();
        $search = $request->search;
        $managements = managements::where(function ($query) use ($search) {
            if ($search) {
                $query->where('', 'LIKE', "%{$search}%");
            }
        })->paginate();
        return view('admin.managements', compact('managements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeUpdateManagementsFormRequest $request)
    {
        $data = $request->all();
        $data['senha'] = Hash::make(Str::random(8));
        $managements = managements::create($data);
        if ($managements) {
            return redirect()->route('managements.index')
                ->with(['success' => 'Coordenador cadastrado com sucesso!']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(storeUpdateManagementsFormRequest $request, $id)
    {
        $managements = managements::find($id);
        $data = $request->all();
        $managements->fill($data)->update();
        if ($managements) {
            return redirect()->route('managements.index')
                ->with(['success' => 'Coordenador editado com sucesso!']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $managements = managements::find($id);
        $managements->delete();
        if ($managements) {
            return redirect()->route('managements.index')
                ->with(['success' => 'Coordenador deletado com sucesso!']);
        }
    }
}

