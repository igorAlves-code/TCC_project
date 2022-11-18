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

    @include('layouts.modais.managements.new')
    <div id="containerTable">
        <div id="tableCrud">
            <table class="table" id="tableManagements">
                <thead>
                    <tr>
                        <td scope="col" colspan="5">
                            <button type="button" id="btnCad" class="btn btn-primary btn-modal" data-toggle="modal"
                                data-target="#newManagement">Cadastrar <i class="bi bi-person-plus"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Email</th>
                        <th scope="col" colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($managements as $management)
                        <tr>
                            <td>{{ $management->nome }}</td>
                            <td>{{ $management->sobrenome }}</td>
                            <td>{{ $management->email }}</td>
                            <td>
                                <a href="#editManagement{{ $management->id }}" class="btn btn-warning btn-modal btn-edit"
                                    data-toggle="modal"><i class="bi bi-pencil-square"></i> Editar</a>
                            </td>
                            <td>
                                <a href="#destroyManagement{{ $management->id }}"
                                    class="btn btn-warning btn-modal btn-danger" data-toggle="modal"><i
                                        class="bi bi-trash2-fill"></i> Excluir</a>
                            </td>
                            @include('layouts.modais.managements.edit')
                            @include('layouts.modais.managements.delete')
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
          
    <script src="https://cdn.tailwindcss.com"></script>

    <div id="pagination" class="flex items-center justify-around w-100">
        {{ $managements->links() }}
    </div>
@endsection
