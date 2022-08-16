@extends('layouts.main')

@section('title', 'A.S.R - Agendamento de Salas e Recursos')

@section('css')
<link rel="stylesheet" href="/css/styleAgendar.css">

@endsection

@section('content')
<main>
    <div class="agendarMain">
        <div class="title">
            <h1>Selecione uma data e horário</h1>
            <div class="separatorTitle"></div>
        </div>

        <div id="calendar"></div>

    </div>
</main>

@endsection
