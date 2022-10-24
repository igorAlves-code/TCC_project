<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\storeUpdateTeachersFormResquest;
use App\Models\teachers;

class teachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $teachers = teachers::$request->get();
        $search = $request->search;
        $teachers = teachers::where(function ($query) use ($search){
            if($search) {
                $query->where('nome', 'LIKE', "%{$search}%");
            }
        })->get();
        // return redirect()->route('teachers.index', compact('teachers'));
        return view('admin.teachers', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeUpdateTeachersFormResquest $request)
    {
        $teachers = teachers::create($request->all());
        if ($teachers) {
            return redirect()->route('teachers.index', compact($request->id))
                ->with(['success' => 'Professor cadastrado com sucesso!']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(storeUpdateTeachersFormResquest $request, $id)
    // {
    //     $teachers = teachers::find($id);
    //     $data = $request->all();
    //     $teachers->fill($data)->update();
    //     if ($teachers) {
    //         return redirect()->route('teachers.index')
    //             ->with(['success' => 'Edição realizada com sucesso!']);
    //     }
    // }
}
