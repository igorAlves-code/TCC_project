@extends('layouts.main')

@section('title', 'A.S.R - Agendamento de Salas e Recursos')

@section('css')
<link rel="stylesheet" href="/css/styleCoordenacao.css">
@endsection

@yield('css2')

@section('content')
<main>
    <div class="title">
        <h1>Área Administrativa</h1>
        <div class="separatorTitle"></div>
    </div>

    <div id="containerAdmin">
        <input type="checkbox" id="check">
            <label for="check" class="checkbtn">Opções</label>  
        <div id="menuAdmin">
            <a href="/coordenacao/teachers" id="teachers" class="menuOptions" onclick="hideEffect()">PROFESSORES</a>
            <a href="/coordenacao/managements" id="managements" class="menuOptions" onclick="hideEffect()">COORDENADORES</a>
            <a href="/coordenacao/enviroments" id="enviroments" class="menuOptions" onclick="hideEffect()">AMBIENTES</a>
            <a href="/coordenacao/equipments" id="equipments" class="menuOptions" onclick="hideEffect()">EQUIPAMENTOS</a>
        </div>
    
        @yield('tableCrud')

        </div>

        </main>

        @endsection

@section('js')
<script src="/js/scriptCoordenacao.js" defer></script>

@endsection
