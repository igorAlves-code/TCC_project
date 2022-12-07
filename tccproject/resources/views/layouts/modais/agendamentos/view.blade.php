<link rel="stylesheet" href="/css/styleAgendar.css">


<div class="modal fade" id="viewAgendamento" data-backdrop="static" data-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Visualizar Agendamento</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">

                     <div class="mb-3">
                        <label for="dateWithdrawalScheduling" class="form-label">Data do Agendamento</label>
                        <input type="text" class="form-control" name="start" id="start" aria-describedby="emailHelp" readonly>
                    </div>

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="Nome" aria-describedby="typeHelp" readonly >
                 </div>
                 <div class="mb-3" id="ifNullRecurso">
                    <label for="nome" class="form-label">Recurso/Dispositivo</label>
                    <input type="text" class="form-control" id="Recurso" aria-describedby="typeHelp" readonly >
                 </div>
                 <div class="mb-3" id="ifNullAmbiente">
                    <label for="nome" class="form-label">Ambiente</label>
                    <input type="text" class="form-control" id="Ambiente" aria-describedby="typeHelp" readonly >
                 </div>

                 <label for="" class="form-label">Horário:</label>
                    <div class="mb-3" style="margin-bottom: 1rem !important;" id="containerHour">
                        <div>
                            <label for="classStartScheduling" class="form-label">De</label>
                            <input type="text" class="form-control" id="Retirada" aria-describedby="numberHelp"
                            readonly ">
                        </div>
                        <div>
                            <label for="classEndScheduling" class="form-label">Até</label>
                            <input type="text" class="form-control" id="Devolucao" aria-describedby="numberHelp"
                            readonly >
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
            </div>
        </div>
    </div>
</div>
