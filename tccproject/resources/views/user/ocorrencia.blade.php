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

        <div class="form">
            <form action="{{ route('send.mail.ocorrencia') }}" method="POST" class="envForm">
                @csrf

                {{-- Tratamento de erros --}}

                @if (Session::has('errors'))
                    @include('layouts.modais.errors')
                    <script type="text/javascript">
                        $('#error').modal('show');
                    </script>
                @endif

                @if (session('success'))
                    @include('layouts.modais.success')
                    <script type="text/javascript">
                        $('#success').modal('show');
                    </script>
                @endif

                <div class="inputsContainer">
                    <div class="containerField">
                        <label>Nome</label>
                        <input type="text" value="{{ auth()->User()->nome }}" autocomplete="off" name="nome">
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
