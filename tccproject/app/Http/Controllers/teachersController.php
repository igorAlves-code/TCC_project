<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\storeUpdateTeachersFormRequest;
use App\Models\teachers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
        })->paginate(3);
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
        $password = Str::random(8);
        $data['senha'] = Hash::make($password);
        $teachers = teachers::create($data);

        $mail_data = [
            // 'recipient' => 'gabrielsouzat2005@outlook.com',
            'to' => $request->email,
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'disciplina' => $request->disciplina,
            'senha' => $password,
            'subject' => '',
        ];

        session()->put('nome', $mail_data['nome']);
        session()->put('sobrenome', $mail_data['sobrenome']);
        session()->put('to', $mail_data['to']);
        session()->put('senha', $mail_data['senha']);
        session()->put('disciplina', $mail_data['disciplina']);

        Mail::send('layouts.emails.teachersPassword', $mail_data, function($email) use ($mail_data) {
            $email->to($mail_data['to'])
                ->from(Auth::user()->email, $mail_data['nome'])
                ->subject('Aqui está o seu acesso');
        });

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
