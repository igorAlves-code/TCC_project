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

@endsection
