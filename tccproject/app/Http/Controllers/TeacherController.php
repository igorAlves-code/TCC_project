<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\modelTeacher; /* Criar model ainda aqui, porém já declarado */


class teacherController extends Controller {

    private $objTeacher;

    public function __construct()
    {
        /*$this->$objTeacher=new modelTeacher();*/
    }

public function store(Request $request){

    $this->objTeacher->create([
        'nome'=>$request->nome,
        'sobrenome'=>$request->sobrenome,
        'email'=>$request->email,
        'nome'=>$request->disciplina,
        'acesso'=>$request->acesso

    ]);

}

}


?>
