@extends('admin.index')

@section('tableCrud')
    @if (Session::has('errors'))
        @include('layouts.modais.teachers.errors')
        <script type="text/javascript">
            $('#error').modal('show');
        </script>
    @endif

    @include('layouts.modais.teachers.new')
<div id="containerTable">
    <div id="tableCrud">
        <table class="table">
            <thead>
                <tr>
                    <td scope="col" colspan="3">
                        <button type="button" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#newTeacher">Cadastrar</button>
                    </td>
                    <td scope="col" colspan="4" hidden>
                        <button type="button" class="btn btn-info btn-modal">Visualização Geral</button>
                    </td>
                    <td scope="col" colspan="4">
                        <button type="button" class="btn btn-info btn-modal" data-toggle="modal" data-target="#selectSubjectTeacher">Filtrar por disciplina</button>
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
                            @include('layouts.modais.teachers.search')
                            <td>{{ $teachers->nome }}</td>
                            <td>{{ $teachers->sobrenome }}</td>
                            <td>{{ $teachers->email }}</td>
                            <td>{{ $teachers->disciplina }}</td>
                            <td>{{ $teachers->acesso }}</td>
                            <td>
                                <a href="#editTeacher{{ $teachers->id }}" class="btn btn-warning btn-modal btn-edit"
                                    data-toggle="modal">Editar</a>
                            </td>
                            <td>
                                <a href="#destroyTeacher{{ $teachers->id }}"
                                    class="btn btn-warning btn-modal btn-danger" data-toggle="modal">Excluir</a>
                            </td>
                            @include('layouts.modais.teachers.edit')
                            @include('layouts.modais.teachers.delete')
                        </tr>
                    @endforeach

            </tbody>
        </table>
    </div>
</div>





<!-- Modal Edição Professor -->
<div class="modal fade" id="editTeacher" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTeacherLabel">Dados do Professor</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nameTeacher" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nameTeacher" aria-describedby="nameHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="middleNameTeacher" class="form-label">Sobrenome</label>
                        <input type="text" class="form-control" id="middleNameTeacher" aria-describedby="middleNameHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="emailTeacher" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailTeacher" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="subjectTeacher" class="form-label">Disciplina</label>
                        <input type="text" class="form-control" id="subjectTeacher" aria-describedby="subjectHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="accessTeacher" class="form-label">Acesso</label>
                        <select class="form-control" id="accessTeacher" aria-describedby="accessHelp">
                            <option value="0">Liberado</option>
                            <option value="1">Bloqueado</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-primary" id="env">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Exclusão Professor -->
<div class="modal fade" id="deleteTeacher" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteTeacherLabel">Excluir Professor</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nameTeacher" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nameTeacher" aria-describedby="emailHelp" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="middleNameTeacher" class="form-label">Sobrenome</label>
                        <input type="text" class="form-control" id="middleNameTeacher" aria-describedby="emailHelp" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="emailTeacher" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailTeacher" aria-describedby="emailHelp" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="subjectTeacher" class="form-label">Disciplina</label>
                        <input type="text" class="form-control" id="subjectTeacher" aria-describedby="emailHelp" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger l-flex" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-secondary" id="env">Excluir</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
