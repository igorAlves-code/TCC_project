@extends('coordenacao.index')

@section('tableCrud')
<div id="containerTable">
    <div id="tableCrud">
        <table class="table">
            <thead>
                <tr>
                    <td scope="col" colspan="5">
                        <button type="button" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#newManagement">Cadastrar</button>
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
                <tr>
                    <td>Luiz</td>
                    <td>César Pena</td>
                    <td>luiz.pena52@etec.sp.gov.br</td>
                    <td>
                        <button type="button" class="btn btn-warning btn-modal btn-edit" data-toggle="modal" data-target="#editManagement">Editar</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger btn-modal" data-toggle="modal" data-target="#deleteManagement">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Cadastro Coordenador -->
<div class="modal fade" id="newManagement" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newManagementLabel">Cadastrar Coordenador</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nameManagement" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nameManagement" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="middleNameManagement" class="form-label">Sobrenome</label>
                        <input type="text" class="form-control" id="middleNameManagement" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="emailManagement" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailManagement" aria-describedby="emailHelp" required>
                    </div>
                    {{-- Senha => acho que será definida na Controller ou Model
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div> 
                    --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--
<!-- Modal Pesquisa Coordenador -->
<div class="modal fade" id="selectSubjectManagement" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="selectSubjectManagementLabel">Filtrar por Disciplina</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <input class="form-control me-2" type="search" placeholder="Disciplina" aria-label="Search">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
                </div>
            </form>
        </div>
    </div>
</div>
--}}

<!-- Modal Edição Coordenador -->
<div class="modal fade" id="editManagement" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editManagementLabel">Dados do Coordenador</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nameManagement" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nameManagement" aria-describedby="nameHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="middleNameManagement" class="form-label">Sobrenome</label>
                        <input type="text" class="form-control" id="middleNameManagement" aria-describedby="middleNameHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="emailManagement" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailManagement" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-primary">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Exclusão Coordenador -->
<div class="modal fade" id="deleteManagement" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteManagementLabel">Excluir Coordenador</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nameManagement" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nameManagement" aria-describedby="emailHelp" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="middleNameManagement" class="form-label">Sobrenome</label>
                        <input type="text" class="form-control" id="middleNameManagement" aria-describedby="emailHelp" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="emailManagement" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailManagement" aria-describedby="emailHelp" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger l-flex" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-secondary">Excluir</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection