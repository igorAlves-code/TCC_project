@extends('layouts.main')

@section('title', 'A.S.R - Agendamento de Salas e Recursos')

@section('css')
<link rel="stylesheet" href="/css/styleAgendamentos.css">
@endsection

@section('content')

<main>
    <div class="title">
        <h1>Agendamentos</h1>
        <div class="separatorTitle"></div>
    </div>

<div class="scroll">

@isset($agendamento)
 @foreach ($agendamento as $agendamento)
    <div class="cardContainer ">
    <div class="card">
    <h1 class="titleDate">{{date('d/m/Y')}}</h1>
  <div class="table-responsive">
 <table class="table">
   <thead>
     <tr>
       <th scope="col">Ambiente</th>
       <th scope="col">Recurso</th>
       <th scope="col">Retirada</th>
       <th scope="col">Devolução</th>
       <th scope="col">Ações</th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <td>{{$agendamento->ambiente}}</td>
       <td>{{$agendamento->recurso}}</td>
       <td>{{$agendamento->retirada}}</td>
       <td>{{$agendamento->devolução}}</td>
       <td>
         <a href="" class="btn btn-warning btn-modal btn-edit" data-toggle="modal">
         <i class="bi bi-pencil-square"></i> Editar</a>
       
         <a href="" class="btn btn-warning btn-modal btn-danger" data-toggle="modal">
         <i class="bi bi-trash2-fill"></i> Excluir</a>
       </td>
     </tr>
   </tbody>
 </table>
</div>  
   </div>
     </div>
@endforeach
@endisset

@empty($agendamento->id)
<div class="Container">
    <div class="empty">
      <img src="\img\empty.png"
       width="40px" 
       draggable="false">
      <h1>Nenhum agendamento!</h1>
    </div>
</div>
@endempty 

</div>
@endsection