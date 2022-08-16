@extends('layouts.main')

@section('title', 'A.S.R - Agendamento de Salas e Recursos')

@section('css')
<link rel="stylesheet" href="/css/styleAgendamentos.css">

@endsection

@section('content')
<main>
    <div class="title">
        <h1>Agendamentos</h1>
        <div class="separatorTitle"></div>
    </div>

    <div class="empty">
        <div class="text">
            <span>Não há agendamentos</span>
        </div>
    </div>
</main>

@endsection