<link rel="stylesheet" href="/css/styleAgendamentos.css">

<div class="cardContainer ">
        <div class="card">
        <?php
        $date = $agendamentos->start;
        $data_brasileira = implode("/",array_reverse(explode("-",$date)));
        ?>
          <h1 class="titleDate" id="titleDate">{{$data_brasileira}}</h1>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                  @can('admin')
                    <th scope="col">Nome</th>
                  @endcan

                    @isset($agendamentos->ambiente)
                    <th scope="col">Ambiente</th>
                    @endisset
                    @isset($agendamentos->recurso)
                    <th scope="col">Recurso</th>
                    @endisset
                    <th scope="col">Retirada</th>
                    <th scope="col">Devolução</th>
                    <th scope="col" colspan="2">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  @can('admin')
                    <td><strong>{{$agendamentos->title}}</strong></td>
                  @endcan
                    @isset($agendamentos->ambiente)
                    <td>{{$agendamentos->ambiente}}</td>
                    @endisset
                    @isset($agendamentos->recurso)
                    <td>{{$agendamentos->recurso}}</td>
                    @endisset
                    <td>{{$agendamentos->retirada}}º aula</td>
                    <td>{{$agendamentos->devolucao}}º aula</td>
                    <td>
                      <a href="#editAgendamento {{ $agendamentos->id . '/' . $date }}" 
                      class="btn btn-modal btn btn-dark" 
                      data-toggle="modal">
                      <i class="bi bi-pencil-square"></i> Editar</a> 
                      @include('layouts.modais.agendamentos.edit')
                      </td>
                      <td>
                      <a href="#destroyAgendamento{{ $agendamentos->id . '/' . $date }}" 
                      class="btn btn-modal btn-danger" 
                      data-toggle="modal">
                      <i class="bi bi-trash2-fill"></i> Excluir</a>
                      @include('layouts.modais.agendamentos.delete')
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>  
         </div>
       </div>  