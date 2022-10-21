<!-- Modal Exclusão Equipamento -->
<div class="modal fade" id="destroyEnviroment{{ $equipment->id }}" data-backdrop="static" data-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="destroyEnviromentLabel">Excluir Equipamento</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="{{ route('enviroments.destroy', $equipment->id) }}" method="post">
                @method('DELETE')
                @csrf
                <div class="modal-body">
                    <div class="mb-3 p-3 alert-danger">
                        <i class="bi bi-exclamation-triangle"></i> Deseja realmente excluir esse registro?
                    </div>
                    <div class="mb-3">
                        <label for="nameEnviroment" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nameEnviroment" aria-describedby="emailHelp"
                            readonly value="{{ $equipment->nomeEquipamento }}">
                    </div>
                    <div class="mb-3">
                        <label for="typeEnviroment" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="typeEnviroment" aria-describedby="typeHelp"
                            readonly value="{{ $equipment->tipoEquipamento }}">
                    </div>
                    <div class="mb-3">
                        <label for="numberEnviroment" class="form-label">Quantidade</label>
                        <input type="number" class="form-control" id="numberEnviroment" aria-describedby="numberHelp"
                            readonly value="{{ $equipment->quantidadeEquipamento }}">
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
