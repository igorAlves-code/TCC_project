<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class siteController extends Controller
{
    public function agendar()
    {
     return view('/user/agendar');
    }


    public function agendamentos()
    {
     return view('/user/agendamentos');
    }

    public function coordenacao()
    {
    if (Gate::denies('admin')){
        return redirect()->back();
    }
    else{
       return view('admin/index');
    }

    }
}
