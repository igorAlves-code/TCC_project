@extends('layouts.main')

@section('title', 'A.S.R - Agendamento de Salas e Recursos')

@section('css')
<link rel="stylesheet" href="/css/styleAlterarSenha.css">
@endsection

@section('content')
<main>
    <div class="title">
        <h1>Alterar Senha</h1>
        <div class="separatorTitle"></div>
    </div>

    <form action="" method="post" class="formChangePass">

        <div class="inputsContainer">
            <label for="password">Nova Senha:</label>
            <input type="text" id="password" class="pw">
            <img id="eyePassword">
        </div>

        <div class="inputsContainer">
            <label for="confirmPassword">Confirmar Senha:</label>
            <input type="text" id="confirmPassword" class="pw">
            <img id="eyeConfirmPassword">
        </div>

        <div class="inputsContainer">
            <button id="Env" type="submit">Alterar Senha</button>
        </div>

    </form>

</main>

<script src="/js/scriptAlterarSenha.js" defer></script>

@endsection