@extends('layouts.main')

@section('title', 'A.S.R - Agendamento de Salas e Recursos')

@section('css')
<link rel="stylesheet" href="/css/styleAgendar.css">

{{-- fullcalendar--}}
<link href="/calendar/main.css" rel='stylesheet' />
<script src="/calendar/main.js"></script>
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
      <div class="inputsContainer">
            <div class="containerField">
                <label>Nome</label>
                <input type="text"  autocomplete="off" name="nome" >
            </div>
        </div>
        <div class="inputsContainer">
            <div class="containerField">
                <label>Data</label>
                <input type="text"  autocomplete="off" name="nome" >
            </div>
        </div>
        <div class="inputsContainer">
            <div class="containerField">
            <label>Horário</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Selecione o horário</option>
              <option value="1">One</input></option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            </div>
        </div>

        <div class="inputsContainer">
            <div class="containerField">
            <label>Ambiente</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Selecione o Ambiente</option>
              <option value="1">Auditório</option>
              <option value="3">Nivonei</option>
              <option value="2">Mini auditório </option>
              <option value="3">Laboratório</option>
              
            </select>
            </div>
        </div>

        <div class="inputsContainer">
            <div class="containerField">
            <label>Recurso</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Selecione o recurso</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            </div>
        </div>

      </div>
      <div class="modal-footer">
      <button id="Env">Agendar</button>
      </div>
    </div>
  </div>
</div>


@section('js')
<script src="/js/scriptAgendar.js"></script>
@endsection