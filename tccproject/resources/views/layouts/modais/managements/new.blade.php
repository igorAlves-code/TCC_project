<!-- Modal Cadastro Coordenador -->
<div class="modal fade" id="newManagement" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
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
                    <button type="submit" class="btn btn-outline-primary" id="env">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
