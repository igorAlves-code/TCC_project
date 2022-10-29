@extends('layouts.main')
@section('title', 'A.S.R - Agendamento de Salas e Recursos')

@section('css')
<link rel="stylesheet" href="/css/styleAgendar.css">

{{-- fullcalendar--}}
<link href="/fullcalendar/main.css" rel='stylesheet' />
<script src="/fullcalendar/main.js"></script>
@endsection

@section('content')

    @if (session('success'))
        @include('layouts.modais.success')
        <script type="text/javascript">
            $('#success').modal('show');
        </script>
    @else
    @endif

<main>
  <div class="title">
    <h1>Selecione uma data e horário</h1>
    <div class="separatorTitle"></div>
  </div>
  <div id="calendar"></div>

</main>
@endsection


<!-- Modal Agendamento -->
<div class="modal fade" id="newScheduling" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newSchedulingLabel">Realizar Agendamento</h5>
        <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
      </div>
      <form action="{{ url('agendar/enviar') }}" method="POST">
        @csrf
        <div class="modal-body">
        <div class="mb-3">
            <label for="titlelScheduling" class="form-label">Nome</label>
            <input value="{{auth()->User()->name}}" class="form-control" name="title" aria-describedby="emailHelp" required>
          </div>

          <div class="mb-3"> 
            <label for="equipmentScheduling" class="form-label">Recurso/Dispositivo</label>
            <select class="form-select form-control" name="recurso" id="equipmentScheduling" aria-label="Default select example">
              <option selected="true" disabled="disabled">Selecione o recurso</option>
              @foreach ($equipments as $equipments)
              <option value="{{ $equipments->nomeEquipamento }}">{{ $equipments->nomeEquipamento }}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="enviromentScheduling" class="form-label">Ambiente</label>
            <select class="form-select form-control" name="ambiente" id="enviromentScheduling" aria-label="Default select example">
            <option selected="true" disabled="disabled">Selecione o Ambiente</option>
            @foreach ($enviroments as $enviroment)
              <option value="{{ $enviroment->nomeAmbiente }}">{{ $enviroment->nomeAmbiente }}</option>
            @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="dateWithdrawalScheduling" class="form-label">Data do Agendamento</label>
            <input type="date" class="form-control" name="start" id="dateWithdrawalScheduling" aria-describedby="emailHelp" required>
          </div>
          <label for="" class="form-label">Horário:</label>
          <div class="mb-3" id="containerHour">
          <div>
              <label for="classStartScheduling" class="form-label">De</label>
              <!-- <input type="time" class="form-control" id="dateStartScheduling" aria-describedby="emailHelp" required"> -->
              <select name="retirada" id="classStartScheduling" class="form-control"  required>
                <option value="1ªaula">1ªaula</option>
                <option value="2ªaula">2ªaula</option>
                <option value="3ªaula">3ªaula</option>
                <option value="4ªaula">4ªaula</option>
                <option value="5ªaula">5ªaula</option>
                <option value="6ªaula">6ªaula</option>
                <option value="7ªaula">7ªaula</option>
                <option value="8ªaula">8ªaula</option>
                <option value="9ªaula">9ªaula</option>
              </select>
            </div>
            <div>
              <label for="classEndScheduling" class="form-label">Até</label>
              <!-- <input type="time" class="form-control" id="dateEndScheduling" aria-describedby="emailHelp" required"> -->
              <select name="devolução" id="classEndScheduling" class="form-control"  required>
                <option value="1ªaula">1ªaula</option>
                <option value="2ªaula">2ªaula</option>
                <option value="3ªaula">3ªaula</option>
                <option value="4ªaula">4ªaula</option>
                <option value="5ªaula">5ªaula</option>
                <option value="6ªaula">6ªaula</option>
                <option value="7ªaula">7ªaula</option>
                <option value="8ªaula">8ªaula</option>
                <option value="9ªaula">9ªaula</option>
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

@section('js')
<script src="/js/scriptAgendar.js" defer></script>
@endsection