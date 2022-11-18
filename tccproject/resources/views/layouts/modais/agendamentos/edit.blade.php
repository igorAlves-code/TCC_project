<link rel="stylesheet" href="/css/styleAgendar.css">

<!-- Modal Edição Agendamento -->
<div class="modal fade" id="editAgendamento {{ $agendamentos->id . '/' . $date }}" data-backdrop="static"
    data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAgendamentoLabel">Editar Agendamento</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="{{ route('agendamentos.update', $agendamentos->id) }}" method="post">
                @method('patch')
                @csrf
                <div class="modal-body">
                <?php
                $date = $agendamentos->start;
                $data_brasileira = implode("/",array_reverse(explode("-",$date)));
                ?>

                    <div class="mb-3">
                        <label for="dateWithdrawalScheduling" class="form-label">Data do Agendamento</label>
                        <input type="date" class="form-control" name="start" id="dateWithdrawalScheduling" aria-describedby="emailHelp" required>
                    </div>

                    <div class="mb-3">
                        <label for="equipmentScheduling" class="form-label">Recurso/Dispositivo</label>
                        <select class="form-select form-control" name="recurso" id="equipmentScheduling" aria-label="Default select example">
                            <option selected="true" disabled="disabled">{{$agendamentos->recurso}}</option>
                            @foreach ($equipments as $equipments)
                            <option value="{{ $equipments->nomeEquipamento }}">{{ $equipments->nomeEquipamento }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="enviromentScheduling" class="form-label">Ambiente</label>
                        <select class="form-select form-control" name="ambiente" id="enviromentScheduling"
                            aria-label="Default select example">
                            <option selected="true" disabled="disabled">{{ $agendamentos->ambiente }}</option>
                            @foreach ($enviroments as $enviroment)
                                <option value="{{ $enviroment->nomeAmbiente }}">{{ $enviroment->nomeAmbiente }}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="" class="form-label">Horário:</label>
                    <div class="mb-3" style="margin-bottom: 1rem !important;" id="containerHour">
                        <div>
                            <label for="classStartScheduling" class="form-label">De</label>
                            <select name="retirada" id="classStartScheduling" class="form-control" required>
                                <option selected="true" disabled="disabled">{{ $agendamentos->retirada }}ªaula</option>
                                <option value="1">1ªaula</option>
                                <option value="2">2ªaula</option>
                                <option value="3">3ªaula</option>
                                <option value="4">4ªaula</option>
                                <option value="5">5ªaula</option>
                                <option value="6">6ªaula</option>
                                <option value="7">7ªaula</option>
                                <option value="8">8ªaula</option>
                                <option value="9">9ªaula</option>
                            </select>
                        </div>
                        <div>
                            <label for="classEndScheduling" class="form-label">Até</label>
                            <select name="devolucao" id="classEndScheduling" class="form-control" required>
                                <option selected="true" disabled="disabled">{{ $agendamentos->devolucao }}ªaula</option>
                                <option value="1">1ªaula</option>
                                <option value="2">2ªaula</option>
                                <option value="3">3ªaula</option>
                                <option value="4">4ªaula</option>
                                <option value="5">5ªaula</option>
                                <option value="6">6ªaula</option>
                                <option value="7">7ªaula</option>
                                <option value="8">8ªaula</option>
                                <option value="9">9ªaula</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btnDanger" class="btn btn-danger" data-dismiss="modal"
                            style="background-color: #dc3545;">Cancelar</button>
                        <button type="submit" class="btn btn-outline-primary" id="env">Editar</button>
                    </div>
            </form>
        </div>
    </div>
</div>
