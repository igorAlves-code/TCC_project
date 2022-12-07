@extends('layouts.main')
@section('title', 'A.S.R - Agendamento de Salas e Recursos')

@section('css')
    <link rel="stylesheet" href="/css/styleAgendar.css">

    {{-- fullcalendar --}}
    <link href="/fullcalendar/main.css" rel='stylesheet' />
    <script src="/fullcalendar/main.js"></script>
@endsection

@section('content')

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

    <main>

        <div class="title">
            <h1>Agendar</h1>
            <div class="separatorTitle"></div>
        </div>

        @can('bloqueado')
            <div class="Container">
                <div class="block">
                    <img src="\img\block-user.png" width="40px" draggable="false">
                    <h1>Você está <strong>bloqueado!</strong></h1>
                </div>
            </div>
        @else
            <div id="calendar"></div>
        @endcan
    </main>
@endsection

@include('layouts.modais.agendamentos.create')
@include('layouts.modais.agendamentos.view')

@section('js')
    <script src="/js/scriptAgendar.js" defer></script>
@endsection