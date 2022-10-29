<link rel="stylesheet" href="/css/styleCoordenacao.css">

{{-- Modal Erros --}}
<div id="success" class="modal fade show" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newEnviromentLabel">Sucesso!!!</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <div class="mb-3 p-3 alert-success">{{ session('success', 'message') }}</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="#btnDanger" class="btn btn-danger" data-dismiss="modal" style="background-color: #dc3545;">Fechar</button>
            </div>
        </div>
    </div>
</div>
