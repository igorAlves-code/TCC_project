{{-- Modal Erros --}}
<div id="error" class="modal fade show" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newEnviromentLabel">Oops...</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            {{-- <div class="alert alert-warning alert-dismissible" role="alert" style="">
                <ul class="p-1"> --}}
            <div class="modal-body">
                <div class="mb-3">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            </div>
            {{-- </ul> --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
            {{-- </div> --}}
        </div>
    </div>
</div>
