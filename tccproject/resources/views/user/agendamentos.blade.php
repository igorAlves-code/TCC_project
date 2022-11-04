@extends('layouts.main')

@section('title', 'A.S.R - Agendamento de Salas e Recursos')

@section('css')
<link rel="stylesheet" href="/css/styleAgendamentos.css">
@endsection

@section('content')

    @if (Session::has('errors'))
        @include('layouts.modais.errors')
        <script type="text/javascript">
            $('#error').modal('show');
        </script>
    @endif

    @if (session('success'))
        @include('layouts.modais.success')
        <script type="text/javascript">
            $('#success').modal('show');
        </script>
    @endif

    <main>
      <div class="title">
        <h1>Agendamentos</h1>
        <div class="separatorTitle"></div>
      </div>

    <div class="scroll">
      @isset($agendamentos)
      @foreach ($agendamentos as $agendamentos)
      <div class="cardContainer ">
        <div class="card">
          <h1 class="titleDate">{{date('d/m/Y')}}</h1>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Ambiente</th>
                    <th scope="col">Recurso</th>
                    <th scope="col">Retirada</th>
                    <th scope="col">Devolução</th>
                    <th scope="col" colspan="2">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><strong>{{$agendamentos->title}}</strong></td>
                    <td>{{$agendamentos->ambiente}}</td>
                    <td>{{$agendamentos->recurso}}</td>
                    <td>{{$agendamentos->retirada}}º aula</td>
                    <td>{{$agendamentos->devolucao}}º aula</td>
                    <td>
                      <a href="#editAgendamento{{ $agendamentos->id }}" 
                      class="btn btn-warning btn-modal btn-edit" 
                      data-toggle="modal">
                      <i class="bi bi-pencil-square"></i> Editar</a>
                      </td>
                      <td>
                      <a href="#destroyAgendamento{{ $agendamentos->id }}" 
                      class="btn btn-warning btn-modal btn-danger" 
                      data-toggle="modal">
                      <i class="bi bi-trash2-fill"></i> Excluir</a>
                      @include('layouts.modais.agendamentos.delete')
                      @include('layouts.modais.agendamentos.edit')
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>  
         </div>
       </div>
      @endforeach
      @endisset
  
      @empty($agendamentos->id)
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

    <script src="https://cdn.tailwindcss.com"></script>

    <div id="pagination" class="flex items-center justify-around w-100">
        {{-- {{ $agendamentos->links() }} --}}
    </div>
   </main>
@endsection