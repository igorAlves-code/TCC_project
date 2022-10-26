<!-- Modal Edição Equipamento -->
<div class="modal fade" id="editEquipment{{ $equipament->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEquipmentLabel">Dados do Equipamento</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="{{ route('equipments.update', $equipament->id) }}" method="post">
                @method('patch')
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nomeEquipamento" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nomeEquipamento" aria-describedby="nameHelp"
                            required value="{{ $equipament->nomeEquipamento }}">
                    </div>
                    <div class="mb-3">
                        <label for="tipoEquipamento" class="form-label">Tipo</label>
                        <input type="text" class="form-control" name="tipoEquipamento" aria-describedby="typeHelp"
                            required value="{{ $equipament->tipoEquipamento }}">
                    </div>
                    <div class="mb-3">
                        <label for="quantidadeEquipamento" class="form-label">Quantidade</label>
                        <input type="number" class="form-control" name="quantidadeEquipamento"
                            aria-describedby="numberHelp" required value="{{ $equipament->quantidadeEquipamento }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnDanger" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-primary" id="env">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
