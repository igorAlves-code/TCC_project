<link rel="stylesheet" href="/css/styleAgendar.css">

<div class="modal fade" id="newScheduling" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSchedulingLabel">Realizar Agendamento</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="{{ url('agendar/enviar') }}" method="POST">
                @csrf
                <input value="{{ auth()->User()->nome }} {{ auth()->User()->sobrenome }}" name="title"
                    aria-describedby="emailHelp" type="hidden" required>
                <input value="{{ auth()->User()->id }}" name="userId" aria-describedby="emailHelp" type="hidden"
                    required>
                <input type="hidden" id="start" name="start" aria-describedby="typeHelp" required>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="dateWithdrawalScheduling" class="form-label">Data do Agendamento</label>
                        <input type="text" class="form-control" id="data" aria-describedby="typeHelp" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="equipmentScheduling" class="form-label">Recurso/Dispositivo</label>
                        <select class="form-select form-control" name="recurso" id="equipmentScheduling"
                            aria-label="Default select example">
                            <option selected="true" value="" >Selecione o Recurso</option>
                            @foreach ($equipments as $equipment)
                                <option value="{{ $equipment->nomeEquipamento }}">{{ $equipment->nomeEquipamento }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="enviromentScheduling" class="form-label">Ambiente</label>
                        <select class="form-select form-control" name="ambiente" id="enviromentScheduling"
                            aria-label="Default select example">
                            <option selected="true" value="" >Selecione o Ambiente</option>
                            @foreach ($enviroments as $enviroment)
                                <option value="{{ $enviroment->nomeAmbiente }}">{{ $enviroment->nomeAmbiente }}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="" class="form-label">Horário:</label>
                    <div class="mb-3" id="containerHour">
                        <div>
                            <label for="classStartScheduling" class="form-label">De</label>
                            <select name="retirada" id="classStartScheduling" class="form-control" required>
                                <option selected="true" disabled="disabled">Selecione uma aula</option>
                                <optgroup label="Manhã/Tarde">
                                    <option value="1">1ª aula</option>
                                    <option value="2">2ª aula</option>
                                    <option value="3">3ª aula</option>
                                    <option value="4">4ª aula</option>
                                    <option value="5">5ª aula</option>
                                    <option value="6">6ª aula</option>
                                    <option value="7">7ª aula</option>
                                    <option value="8">8ª aula</option>
                                    <option value="9">9ª aula</option>
                                </optgroup>
                                <optgroup label="Modular">
                                    <option value="1">1º bloco</option>
                                    <option value="2">2º bloco</option>
                                </optgroup>
                            </select>
                        </div>
                        <div>
                            <label for="classEndScheduling" class="form-label">Até</label>
                            <select name="devolucao" id="classEndScheduling" class="form-control" required>
                                <option selected="true" disabled="disabled">Selecione uma aula</option>
                                <optgroup label="Manhã/Tarde">
                                    <option value="1">1ª aula</option>
                                    <option value="2">2ª aula</option>
                                    <option value="3">3ª aula</option>
                                    <option value="4">4ª aula</option>
                                    <option value="5">5ª aula</option>
                                    <option value="6">6ª aula</option>
                                    <option value="7">7ª aula</option>
                                    <option value="8">8ª aula</option>
                                    <option value="9">9ª aula</option>
                                </optgroup>
                                <optgroup label="Modular">
                                    <option value="1">1º bloco</option>
                                    <option value="2">2º bloco</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-primary" id="env">Agendar</button>
                </div>
            </form>
        </div>
    </div>
</div>
