@extends('admin.index')

@section('tableCrud')
<div id="containerTable">
    <div id="tableCrud">
        <table class="table">
            <thead>
                <tr>
                    <td scope="col" colspan="2">
                        <button type="button" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#newEnviroment">Cadastrar</button>
                    </td>
                    <td scope="col" colspan="3" hidden>
                        <button type="button" class="btn btn-info btn-modal">Visualização Geral</button>
                    </td>
                    <td scope="col" colspan="3">
                        <button type="button" class="btn btn-info btn-modal" data-toggle="modal" data-target="#selectTypeEnviroment">Filtrar por tipo</button>
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
                <tr>
                    <td>Laboratório de Química 1</td>
                    <td>Laboratório de Química</td>
                    <td>1</td>
                    <td>
                        <button type="button" class="btn btn-warning btn-modal btn-edit" data-toggle="modal" data-target="#editEnviroment">Editar</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger btn-modal" data-toggle="modal" data-target="#deleteEnviroment">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Cadastro Ambiente -->
<div class="modal fade" id="newEnviroment" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newEnviromentLabel">Cadastrar Ambiente</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nameEnviroment" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nameEnviroment" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="typeEnviroment" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="typeEnviroment" aria-describedby="typeHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="numberEnviroment" class="form-label">Quantidade</label>
                        <input type="number" class="form-control" id="numberEnviroment" aria-describedby="numberHelp" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Pesquisa Ambiente -->
<div class="modal fade" id="selectTypeEnviroment" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="selectTypeEnviromentLabel">Filtrar por Tipo</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <input class="form-control me-2" type="search" placeholder="Tipo de Ambiente" aria-label="Search">
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

<!-- Modal Edição Ambiente -->
<div class="modal fade" id="editEnviroment" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEnviromentLabel">Dados do Ambiente</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                <div class="mb-3">
                        <label for="nameEnviroment" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nameEnviroment" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="typeEnviroment" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="typeEnviroment" aria-describedby="typeHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="numberEnviroment" class="form-label">Quantidade</label>
                        <input type="number" class="form-control" id="numberEnviroment" aria-describedby="numberHelp" required>
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

<!-- Modal Exclusão Ambiente -->
<div class="modal fade" id="deleteEnviroment" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteEnviromentLabel">Excluir Ambiente</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                <div class="mb-3">
                        <label for="nameEnviroment" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nameEnviroment" aria-describedby="emailHelp" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="typeEnviroment" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="typeEnviroment" aria-describedby="typeHelp" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="numberEnviroment" class="form-label">Quantidade</label>
                        <input type="number" class="form-control" id="numberEnviroment" aria-describedby="numberHelp" readonly>
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
