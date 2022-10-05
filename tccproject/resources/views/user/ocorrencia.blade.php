@extends('layouts.mainUser')

@section('title', 'A.S.R - Agendamento de Salas e Recursos')

@section('css')
<link rel="stylesheet" href="/css/styleOcorrencia.css">
@endsection

@section('content')
<main>
    <div class="title">
        <h1>Ocorrência</h1>
        <div class="separatorTitle"></div>
    </div>

    <div class="form">
        <form action="{{ url('ocorrencia') }}" method="POST">
        @csrf

        {{-- Tratamento de erros --}}

        @if(count($errors)>0)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Preencha todos os dados!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif


        @if($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Obrigado!</strong> {{$message}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
        </div>
        @endif


        @if($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissible fade show"role="alert">
            <strong>OPA!</strong>{{$message}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif

        <div class="inputsContainer">
            <div class="containerField">
                <label>Nome</label>
                <input type="text"  autocomplete="off" name="nome" >
            </div>


            <div class="containerField">
                <label>Data da ocorrência</label>
                <input type="date" name="data" id="inputData" placeholder="Data da ocorrência">
            </div>
        </div>

            <div class="containerField">
             <label>Ocorrência</label>
             <textarea name="ocorrencia" placeholder="Descreva o acontecimento"></textarea>
            </div>

            <button id="Env">Enviar</button>
        </form>
        </div>
</main>
@endsection
