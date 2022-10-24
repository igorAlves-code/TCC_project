<?php
namespace App\Http\Controllers;

use App\Http\Requests\storeUpdateManagementsFormResquest;
use App\Models\managements;
use Illuminate\Http\Request;

class managementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $managements = managements::where(function ($query) use ($search){
            if($search) {
                $query->orderby('nome', 'ASC', "%{$search}%");
            }
        })->get();
        return view('admin.managements', compact('managements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeUpdateManagementsFormResquest $request)
    {
        $managements = managements::create($request->all());
        if ($managements) {
            return redirect()->route('managements.index', compact($request->id))
                ->with(['success' => 'Cadastro realizado com sucesso!']);
        }
    }
}
