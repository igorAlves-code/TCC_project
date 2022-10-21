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
