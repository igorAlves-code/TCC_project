<?php
namespace App\Http\Controllers;

use App\Http\Requests\storeUpdateManagementsFormRequest;
use App\Models\managements;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
        $search = $request->search;
        $managements = User::where('admin', '=', 1)->where(function ($query) use ($search) {
            if ($search) {
                $query->where('', 'LIKE', "%{$search}%");
            }
        })->paginate(3);
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
        $password = Str::random(8);
        $data['password'] = Hash::make($password);
        $data['remember_token'] = Str::random(10);
        $managements = User::create($data);

        $mail_data = [
            // 'recipient' => 'gabrielsouzat2005@outlook.com',
            'to' => $request->email,
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'password' => $password,
            'subject' => '',
        ];

        session()->put('nome', $mail_data['nome']);
        session()->put('sobrenome', $mail_data['sobrenome']);
        session()->put('to', $mail_data['to']);
        session()->put('password', $mail_data['password']);

        Mail::send('layouts.emails.managementsPassword', $mail_data, function($email) use ($mail_data) {
            $email->to($mail_data['to'])
                ->from(Auth::user()->email, $mail_data['nome'])
                ->subject('Aqui está o seu acesso');
        });

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
        $managements = User::find($id);
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
        $managements = User::find($id);
        $managements->delete();
        if ($managements) {
            return redirect()->route('managements.index')
                ->with(['success' => 'Coordenador deletado com sucesso!']);
        }
    }
}

