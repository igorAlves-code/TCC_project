@extends('layouts.mainUser')

@section('title', 'A.S.R - Agendamento de Salas e Recursos')

@section('css')
<link rel="stylesheet" href="/css/styleAgendar.css">

{{-- fullcalendar--}}
<link href="/fullcalendar/main.css" rel='stylesheet' />
<script src="/fullcalendar/main.js"></script>
@endsection

@section('content')
<main>
        <div class="title">
            <h1>Selecione uma data e horário</h1>
            <div class="separatorTitle"></div>
        </div>
        <div id="calendar"></div>

</main>
@endsection


<!-- Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
        <div class="inputsContainer">
            <div class="containerField">
                <label>Data</label>
                <input type="text"  autocomplete="off" name="nome" >
            </div>
        </div>
        <div class="inputsContainer">
            <div class="containerField">
            <label>Horário</label>
              <div class="hourSelect">

                <select id="hourSelectInput" class="form-select" aria-label="Default select example">
                  <option selected="true" disabled="disabled">De</option>
                  <option value="1">One</input></option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>

                <select id="hourSelectInput" class="form-select" aria-label="Default select example">
                  <option selected="true" disabled="disabled">Até</option>
                  <option value="1">One</input></option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
        </div>

        <div class="inputsContainer">
            <div class="containerField">
            <label>Ambiente</label>
            <select class="form-select" aria-label="Default select example">
              <option selected="true" disabled="disabled">Selecione o Ambiente</option>
              <option value="1">Auditório</option>
              <option value="3">Sala Nivonei</option>
              <option value="2">Mini auditório </option>
              <option value="3">Lab. Informática</option>
          
              <option value="3">Lab. Química</option>
            
              <option value="3">Lab. Meio Ambiente</option>
             
              
              
            </select>
            </div>
        </div>

        <div class="inputsContainer">
            <div class="containerField">
            <label>Recurso</label>
            <select class="form-select" aria-label="Default select example">
              <option selected="true" disabled="disabled">Selecione o recurso</option>
              <option value="1">Datashow #1</option>
              <option value="2">Datashow #2</option>
              <option value="3">Datashow #3</option>
            </select>
            </div>
        </div>

      </div>
      <div class="modal-footer">
      <button id="Env">Agendar</button>
      </div>
      </form>
    </div>
  </div>
</div>


@section('js')
<script src="/js/scriptAgendar.js"></script>
@endsection