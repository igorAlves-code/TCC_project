<link rel="stylesheet" href="/css/styleCoordenacao.css">


<div class="modal fade" id="destroyAgendamento{{ $agendamentos->id . '/' . $date }}" data-backdrop="static" data-keyboard="false"
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
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="Nome" aria-describedby="typeHelp"
                            readonly value="{{ $agendamentos->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="dateWithdrawalScheduling" class="form-label">Data do Agendamento</label>
                        <input type="date" class="form-control" name="start" id="dateWithdrawalScheduling" aria-describedby="emailHelp" value="<?php echo $date; ?>" readonly>
                    </div>
                    @isset($agendamentos->recurso)
                    <div class="mb-3">
                        <label for="recurso" class="form-label">Recurso</label>
                        <input type="text" class="form-control" id="recurso" aria-describedby="typeHelp"
                            readonly value="{{ $agendamentos->recurso }}">
                    </div>
                    @endisset
                    @isset($agendamentos->ambiente)
                    <div class="mb-3">
                        <label for="ambiente" class="form-label">Ambiente</label>
                        <input type="text" class="form-control" id="ambiente" aria-describedby="numberHelp"
                            readonly value="{{ $agendamentos->ambiente }}">
                    </div>
                    @endisset
                    <label for="" class="form-label">Horário:</label>
                    <div class="mb-3" style="margin-bottom: 1rem !important;" id="containerHour">
                        <div>
                            <label for="classStartScheduling" class="form-label">De</label>
                            <input type="text" class="form-control" id="ambiente" aria-describedby="numberHelp"
                            readonly value="{{ $agendamentos->retirada }}ªaula">
                        </div>
                        <div>
                            <label for="classEndScheduling" class="form-label">Até</label>
                            <input type="text" class="form-control" id="ambiente" aria-describedby="numberHelp"
                            readonly value="{{ $agendamentos->devolucao }}ªaula">
                        </div>
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
