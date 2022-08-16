@extends('layouts.login')

@section('title', 'A.S.R - Agendamento de Salas e Recursos')

@section('content')
{{-- Seção inicial com logo da instituição, cabeçalho --}}
<header id="header">
    {{-- Logo da instituição --}}
    <img draggable="false" src="/img/logoEtec.png">
</header>

{{-- Seção principal com Logo do sistema e Formulário para Login --}}
<main>
    {{-- Logo do Sistema --}}
    <div class="logo">
        <h1><img draggable="false" src="/img/logoASR.png"></h1>
    </div>

    {{-- Formulário de Login --}}
    <form class="formLogin" name="formLogin" action="#" method="post">

        {{-- 1ª etapa => Email --}}
        <div id="emailForm">
            <label for="email">Entrar</label>
            <input type="text" placeholder="Email (até o @)" id="email" name="email">
            <span>
                <p>@etec.sp.gov.br</p>
            </span>

            <div id="buttonNextForm">Próximo</div>
            <!-- <button id="buttonNextForm">Próximo</button> -->
            <!-- <button onclick="nextForm()" id="buttonNextForm">Próximo</button> -->
        </div>

        {{-- 2ª etapa => Senha --}}
        <div id="passwordForm">
            <label for="password">Insira a senha</label>
            <input type="password" placeholder="Senha" id="password">
            <img id="eyePassword" src="/tccproject/public/img/eyePassword.svg">
            <a href="#">Esqueceu a senha?</a>
            <!-- <input type="submit" value="Entrar" id="submitForm"> -->
            <button id="submitForm">Entrar</button>
        </div>
    </form>
</main>

@endsection