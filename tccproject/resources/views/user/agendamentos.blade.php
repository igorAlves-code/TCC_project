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
     
      @include('layouts.modais.agendamentos.cardAgendamento')

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