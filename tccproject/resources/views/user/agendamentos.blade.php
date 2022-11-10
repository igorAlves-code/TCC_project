@extends('layouts.main')

@section('title', 'A.S.R - Agendamento de Salas e Recursos')

@section('css')
    <link rel="stylesheet" href="/css/styleAgendamentos.css">
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
            <h1>Agendamentos</h1>
            <div class="separatorTitle"></div>
        </div>

        <div class="scroll">
            @isset($agendamentos)
                @foreach ($agendamentos as $agendamento)
                    <div class="cardContainer ">
                        <div class="card">
                            <?php
                            $date = $agendamento->start;
                            $data_brasileira = implode('/', array_reverse(explode('-', $date)));
                            ?>
                            <h1 class="titleDate" id="titleDate">{{ $data_brasileira }}</h1>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Ambiente</th>
                                            <th scope="col">Recurso</th>
                                            <th scope="col">Retirada</th>
                                            <th scope="col">Devolução</th>
                                            <th scope="col" colspan="2">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>{{ $agendamento->title }}</strong></td>
                                            <td>{{ $agendamento->ambiente }}</td>
                                            <td>{{ $agendamento->recurso }}</td>
                                            <td>{{ $agendamento->retirada }}º aula</td>
                                            <td>{{ $agendamento->devolucao }}º aula</td>
                                            <td>
                                                <a href="#editAgendamento{{ $agendamento->id . '/' . $date }}"
                                                    class="btn btn-warning btn-modal btn-edit" data-toggle="modal">
                                                    <i class="bi bi-pencil-square"></i> Editar</a>
                                            </td>
                                            <td>
                                                <a href="#destroyAgendamento{{ $agendamento->id . '/' . $date }}"
                                                    class="btn btn-warning btn-modal btn-danger" data-toggle="modal">
                                                    <i class="bi bi-trash2-fill"></i> Excluir</a>
                                                @include('layouts.modais.agendamentos.delete')
                                                @include('layouts.modais.agendamentos.edit')
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endisset

            @empty($agendamento->id)
                <div class="Container">
                    <div class="empty">
                        <img src="\img\empty.png" width="40px" draggable="false">
                        <h1>Nenhum agendamento!</h1>
                    </div>
                </div>
            @endempty
        </div>

    </main>
@endsection
