<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\storeUpdateTeachersFormRequest;
use App\Models\teachers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class teachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $teachers = teachers::where(function ($query) use ($search){
            if($search) {
                $query->where('disciplina', 'LIKE', "%{$search}%");
            }
        })->paginate();
        return view('admin.teachers', compact('teachers'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeUpdateTeachersFormRequest $request)
    {
        

        $data = $request->all();
        $data['senha'] = Hash::make(Str::random(8));
        $teachers = teachers::create($data);
        if ($teachers) {
            return redirect()->route('teachers.index')
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
    public function update(storeUpdateTeachersFormRequest $request, $id)
    {
        $teachers = teachers::find($id);
        $data = $request->all();
        $teachers->fill($data)->update();
        if ($teachers) {
            return redirect()->route('teachers.index')
                ->with(['success' => 'Professor editado com sucesso!']);
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
        $teachers = teachers::find($id);
        $teachers->delete();
        if ($teachers) {
            return redirect()->route('teachers.index')
                ->with(['success' => 'Professor deletado com sucesso!']);
        }
    }
}
