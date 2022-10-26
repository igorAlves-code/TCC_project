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
    @else
    @endif

    @include('layouts.modais.equipments.new')
    <div id="containerTable">
        <div id="tableCrud">
            <table class="table">
                <thead>
                    <tr>
                        <td scope="col" colspan="2">
                            <button type="button" id="btnCad" class="btn btn-primary btn-modal" data-toggle="modal"
                                data-target="#newEquipment">Cadastrar <i class="bi bi-person-plus"></i></button>
                        </td>
                        <td scope="col" colspan="3">
                            <button type="button" id="btnFiltro" class="btn btn-info btn-modal" data-toggle="modal"
                                data-target="#searchTypeEquipment">Filtrar por tipo <i class="bi bi-search"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Tipo de Equipamento</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col" colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($equipments as $equipament)
                        <tr>
                            @include('layouts.modais.equipments.searchType')
                            <td>{{ $equipament->nomeEquipamento }}</td>
                            <td>{{ $equipament->tipoEquipamento }}</td>
                            <td>{{ $equipament->quantidadeEquipamento }}</td>
                            <td>
                                <a href="#editEquipment{{ $equipament->id }}" class="btn btn-warning btn-modal btn-edit"
                                    data-toggle="modal"><i class="bi bi-pencil-square"></i> Editar</a>
                            </td>
                            <td>
                                <a href="#destroyEquipment{{ $equipament->id }}" class="btn btn-warning btn-modal btn-danger"
                                    data-toggle="modal"><i class="bi bi-trash2-fill"></i> Excluir</a>
                            </td>
                            @include('layouts.modais.equipments.edit')
                            @include('layouts.modais.equipments.delete')
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
          
    <script src="https://cdn.tailwindcss.com"></script>

    <div id="pagination" class="flex items-center justify-around w-100">
        {{ $equipments->links() }}
    </div>
@endsection
