<?php

namespace App\Http\Controllers;
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
        $equipments = equipments::where(function ($query) use ($search){
            if($search) {
                $query->where('nomeEquipamento', 'LIKE', "%{$search}%");
            }
        })->get();
        return view('admin.equipments', compact('equipments'));
    }
}
