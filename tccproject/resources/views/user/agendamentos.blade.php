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

    <div class="Container">
    <div class="empty">
      <img src="\img\empty.png"
       width="35px" 
       draggable="false">
      <h1>Nenhum agendamento!</h1>
    </div>
  </div>
 
@endsection