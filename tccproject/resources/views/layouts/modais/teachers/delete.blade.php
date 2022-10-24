<!-- Modal Exclusão Ambiente -->
<div class="modal fade" id="destroyTeacher{{ $teachers->id }}" data-backdrop="static" data-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="destroyteacherLabel">Excluir Ambiente</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="{{ route('teachers.destroy', $teachers->id) }}" method="post">
                @method('DELETE')
                @csrf
                <div class="modal-body">
                    <div class="mb-3 p-3 alert-danger">
                        <i class="bi bi-exclamation-triangle"></i> Deseja realmente excluir esse registro?
                    </div>
                    <div class="mb-3">
                        <label for="nomeProfessor" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nomeProfessor" aria-describedby="emailHelp"
                            readonly value="{{ $teachers->nomeAmbiente }}">
                    </div>
                    <div class="mb-3">
                        <label for="quantidadeProfessor" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="quantidadeProfessor" aria-describedby="typeHelp"
                            readonly value="{{ $teachers->tipoAmbiente }}">
                    </div>
                    <div class="mb-3">
                        <label for="tipoProfessor" class="form-label">Quantidade</label>
                        <input type="number" class="form-control" id="tipoProfessor" aria-describedby="numberHelp"
                            readonly value="{{ $teachers->quantidadeAmbiente }}">
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