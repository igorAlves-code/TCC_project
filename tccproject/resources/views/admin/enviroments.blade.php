@extends('admin.index')

@section('tableCrud')
    {{-- @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif --}}

    @include('layouts.modais.enviroments.new')
    <div id="containerTable">
        <div id="tableCrud">
            <table class="table">
                <thead>
                    <tr>
                        <td scope="col" colspan="2">
                            <button type="button" class="btn btn-primary btn-modal" data-toggle="modal"
                                data-target="#newEnviroment">Cadastrar</button>
                        </td>
                        <td scope="col" colspan="3" hidden>
                            <button type="button" class="btn btn-info btn-modal">Visualização Geral</button>
                        </td>
                        <td scope="col" colspan="3">
                            <button type="button" class="btn btn-info btn-modal" data-toggle="modal"
                                data-target="#selectTypeEnviroment">Filtrar por tipo</button>
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

                    @foreach ($enviroment as $enviroments)
                        <tr>
                            @include('layouts.modais.enviroments.search')
                            <td>{{ $enviroments->nomeAmbiente }}</td>
                            <td>{{ $enviroments->tipoAmbiente }}</td>
                            <td>{{ $enviroments->quantidadeAmbiente }}</td>
                            <td>
                                <a href="#editEnviroment{{ $enviroments->id }}" class="btn btn-warning btn-modal btn-edit"
                                    data-toggle="modal">Editar</a>
                            </td>
                            <td>
                                <a href="#destroyEnviroment{{ $enviroments->id }}"
                                    class="btn btn-warning btn-modal btn-danger" data-toggle="modal">Excluir</a>
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
