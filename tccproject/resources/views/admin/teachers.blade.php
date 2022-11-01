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

    @include('layouts.modais.teachers.new')
    <div id="containerTable">
        <div id="tableCrud">
            <table class="table">
                <thead>
                    <tr>
                        <td scope="col" colspan="3">
                            <button type="button" id="btnCad" class="btn btn-primary btn-modal" data-toggle="modal"
                                data-target="#newTeacher">Cadastrar <i class="bi bi-person-plus"></i></button>
                        </td>
                        <td scope="col" colspan="4">
                            <button type="button" id="btnFiltro" class="btn btn-info btn-modal" data-toggle="modal"
                                data-target="#selectSubjectTeacher">Filtrar por disciplina <i
                                    class="bi bi-search"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Disciplina</th>
                        <th scope="col">Acesso</th>
                        <th scope="col" colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teachers)
                        <tr>
                            @include('layouts.modais.teachers.selectSubjectTeacher')
                            <td>{{ $teachers->name }}</td>
                            <td>{{ $teachers->sobrenome }}</td>
                            <td>{{ $teachers->email }}</td>
                            <td>{{ $teachers->disciplina }}</td>
                            <td id="acesso">
                                @if ($teachers->acesso == 0)
                                    Liberado
                                @else
                                    Bloqueado
                                @endif
                            </td>
                            <td>
                                <a href="#editTeacher{{ $teachers->id }}" class="btn btn-warning btn-modal btn-edit"
                                    data-toggle="modal"><i class="bi bi-pencil-square"></i> Editar</a>
                            </td>
                            <td>
                                <a href="#destroyTeacher{{ $teachers->id }}" class="btn btn-warning btn-modal btn-danger"
                                    data-toggle="modal"><i class="bi bi-trash2-fill"></i> Excluir</a>
                            </td>
                            @include('layouts.modais.teachers.edit')
                            @include('layouts.modais.teachers.delete')
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>

    <div id="pagination" class="flex items-center justify-around w-100">
        {{ $teachers->links() }}
    </div>
@endsection
