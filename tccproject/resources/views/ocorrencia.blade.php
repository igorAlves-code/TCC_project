@extends('layouts.main')

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

    <div class="info">
        <div class="formInfo">
            <span>para:</span> 
            <input type="text">
         </div>

        <div class="data">
            <span>data do ocorrido:</span> 
            <input type="date">
         </div>
    </div>

    <div class="form">
        <textarea placeholder="Assunto"></textarea>
        <textarea placeholder="Descreva a ocorrência..."></textarea>
        <button>Enviar</button>
    </div>

</main>

@endsection