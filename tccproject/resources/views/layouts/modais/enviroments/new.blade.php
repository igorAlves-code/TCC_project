<!-- Modal Cadastro Ambiente -->
<div class="modal fade" id="newEnviroment" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newEnviromentLabel">Cadastrar Ambiente</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="{{ route('enviroments.store') }}" method="post">
            @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nomeAmbiente" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nomeAmbiente" aria-describedby="nameHelp" value="{{ old('nomeAmbiente') }}">
                    </div>
                    <div class="mb-3">
                        <label for="tipoAmbiente" class="form-label">Tipo</label>
                        <input type="text" class="form-control" name="tipoAmbiente" aria-describedby="typeHelp" value="{{ old('tipoAmbiente') }}">
                    </div>
                    <div class="mb-3">
                        <label for="quantidadeAmbiente" class="form-label">Quantidade</label>
                        <input type="number" class="form-control" name="quantidadeAmbiente" aria-describedby="numberHelp" value="{{ old('quantidadeAmbiente') }}">
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
