@extends('admin.index')

@section('tableCrud')
<div id="containerTable">
    <div id="tableCrud">
        <table class="table">
            <thead>
                <tr>
                    <td scope="col" colspan="2">
                        <button type="button" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#newEquipment">Cadastrar</button>
                    </td>
                    <td scope="col" colspan="3" hidden>
                        <button type="button" class="btn btn-info btn-modal">Visualização Geral</button>
                    </td>
                    <td scope="col" colspan="3">
                        <button type="button" class="btn btn-info btn-modal" data-toggle="modal" data-target="#selectTypeEquipment">Filtrar por tipo</button>
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
                <tr>
                    <td>Notebook Asus</td>
                    <td>Notebook</td>
                    <td>5</td>
                    <td>
                        <button type="button" class="btn btn-warning btn-modal btn-edit" data-toggle="modal" data-target="#editEquipment">Editar</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger btn-modal" data-toggle="modal" data-target="#deleteEquipment">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Cadastro Equipamento -->
<div class="modal fade" id="newEquipment" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newEquipmentLabel">Cadastrar Equipamento</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nameEquipment" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nameEquipment" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="typeEquipment" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="typeEquipment" aria-describedby="typeHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="numberEquipment" class="form-label">Quantidade</label>
                        <input type="number" class="form-control" id="numberEquipment" aria-describedby="numberHelp" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-primary" id="env">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Pesquisa Equipamento -->
<div class="modal fade" id="selectTypeEquipment" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="selectTypeEquipmentLabel">Filtrar por Tipo</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <input class="form-control me-2" type="search" placeholder="Tipo de Equipamento" aria-label="Search">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-primary" id="env">Pesquisar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edição Equipamento -->
<div class="modal fade" id="editEquipment" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEquipmentLabel">Dados do Equipamento</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                <div class="mb-3">
                        <label for="nameEquipment" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nameEquipment" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="typeEquipment" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="typeEquipment" aria-describedby="typeHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="numberEquipment" class="form-label">Quantidade</label>
                        <input type="number" class="form-control" id="numberEquipment" aria-describedby="numberHelp" required>
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

<!-- Modal Exclusão Equipamento -->
<div class="modal fade" id="deleteEquipment" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteEquipmentLabel">Excluir Equipamento</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                <div class="mb-3">
                        <label for="nameEquipment" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nameEquipment" aria-describedby="emailHelp" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="typeEquipment" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="typeEquipment" aria-describedby="typeHelp" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="numberEquipment" class="form-label">Quantidade</label>
                        <input type="number" class="form-control" id="numberEquipment" aria-describedby="numberHelp" readonly>
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
