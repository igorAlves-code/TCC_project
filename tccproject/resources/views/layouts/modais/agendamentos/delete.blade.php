<link rel="stylesheet" href="/css/styleCoordenacao.css">

<!-- Modal Exclusão Ambiente -->
<div class="modal fade" id="destroyAgendamento{{ $agendamentos->id }}" data-backdrop="static" data-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="destroyAgendamentoLabel">Excluir Agendamento</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="{{ route('agendamentos.destroy', $agendamentos->id) }}" method="post">
                @method('DELETE')
                @csrf
                <div class="modal-body">
                    <div class="mb-3 p-3 alert-danger">
                        <i class="bi bi-exclamation-triangle"></i> Deseja realmente excluir esse registro?
                    </div>
                    <div class="mb-3">
                        <label for="recurso" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="Nome" aria-describedby="typeHelp"
                            readonly value="{{ $agendamentos->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="recurso" class="form-label">Recurso</label>
                        <input type="text" class="form-control" id="recurso" aria-describedby="typeHelp"
                            readonly value="{{ $agendamentos->recurso }}">
                    </div>
                    <div class="mb-3">
                        <label for="ambiente" class="form-label">Ambiente</label>
                        <input type="text" class="form-control" id="ambiente" aria-describedby="numberHelp"
                            readonly value="{{ $agendamentos->ambiente }}">
                    </div>
                    <div class="mb-3">
                        <label for="retirada" class="form-label">Retirada</label>
                        <input type="text" class="form-control" id="retirada" aria-describedby="numberHelp"
                            readonly value="{{ $agendamentos->retirada }}º aula">
                    </div>
                    <div class="mb-3">
                        <label for="devolucao" class="form-label">Devolução</label>
                        <input type="text" class="form-control" id="devolucao" aria-describedby="numberHelp"
                            readonly value="{{ $agendamentos->devolucao }}º aula">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnDanger" class="btn btn-danger l-flex" data-dismiss="modal" style="background-color: #dc3545;">Cancelar</button>
                    <button type="submit" class="btn btn-outline-secondary" id="env">Excluir</button>
                </div>
            </form>
        </div>
    </div>
</div>
