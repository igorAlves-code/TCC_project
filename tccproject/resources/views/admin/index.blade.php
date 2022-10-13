@extends('layouts.mainAdm')

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

        {{-- -----------------------------------------HEADER MOBILE--------------------------------------------- --}}
        <div id="menuManager" hidden>
            <div id="menuM" onclick="onClickMenu()">
                <div id="bar1" class="bar"></div>
            </div>
            <ul class="navigationMobile" id="navigationMobile">
                <li><a href="/coordenacao/agendar">AGENDAR</a></li>
                <li><a href="/coordenacao/agendamentos">AGENDAMENTOS</a></li>
            {{--
                <li><a href="/ocorrencia">OCORRÊNCIA</a></li>
                <li><a href="/alterarSenha">ALTERAR SENHA</a></li>
            --}}
                <li><a href="/coordenacao">COORDENAÇÃO</a></li>
                <li><a href="#">SAIR</a></li>
            </ul>
        </div>
        <div class="menuBg" id="menuBg"></div>

        @yield('tableCrud')

    </div>

</main>

@endsection

@section('js')
<script src="/js/scriptCoordenacao.js" defer></script>

@endsection
