@extends('admin.index')

@section('tableCrud')
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
        {{-- <div class="alert alert-success">
            <p>{{ session('mensagem') }}</p>
        </div> --}}
    @endif
    {{-- 
    @foreach ($status as $statu)
        <div>{{ $statu }}</div>
    @endforeach --}}

    {{-- @if (Session::has('delete') == 1)
        @include('layouts.modais.enviroments.success')
        <script type="text/javascript">
            $('#success').modal('show');
        </script>
    @else 
    @endif --}}

    {{-- @if ($status === 'true')
        @include('layouts.modais.enviroments.success')
        <script type="text/javascript">
            $('#success').modal('show');
        </script>
    @else
    @endif --}}

    @include('layouts.modais.enviroments.new')
    <div id="containerTable">
        <div id="tableCrud">
            <table class="table">
                <thead>
                    <tr>
                        <td scope="col" colspan="2">
                            <button type="button" class="btn btn-primary btn-modal" data-toggle="modal"
                                data-target="#newEnviroment">Cadastrar <i class="bi bi-person-plus"></i></button>
                        </td>
                        <td scope="col" colspan="3" hidden>
                            <button type="button" class="btn btn-info btn-modal">Visualização Geral</button>
                        </td>
                        <td scope="col" colspan="3">
                            <button type="button" class="btn btn-info btn-modal" data-toggle="modal"
                                data-target="#selectTypeEnviroment">Filtrar por tipo <i class="bi bi-search"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Tipo de Ambiente</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col" colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($enviroments as $enviroment)
                        <tr>
                            @include('layouts.modais.enviroments.searchType')
                            <td>{{ $enviroment->nomeAmbiente }}</td>
                            <td>{{ $enviroment->tipoAmbiente }}</td>
                            <td>{{ $enviroment->quantidadeAmbiente }}</td>
                            <td>
                                <a href="#editEnviroment{{ $enviroment->id }}" class="btn btn-warning btn-modal btn-edit"
                                    data-toggle="modal"><i class="bi bi-pencil-square"></i> Editar</a>
                            </td>
                            <td>
                                <a href="#destroyEnviroment{{ $enviroment->id }}"
                                    class="btn btn-warning btn-modal btn-danger" data-toggle="modal"><i
                                        class="bi bi-trash2-fill"></i> Excluir</a>
                            </td>
                            @include('layouts.modais.enviroments.edit')
                            @include('layouts.modais.enviroments.delete')
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
