@extends('layouts.main')

@section('title', 'A.S.R - Agendamento de Salas e Recursos')

@section('css')
<link rel="stylesheet" href="/css/styleCoordenacao.css">
@endsection

@section('content')
<main>
    <div class="title">
        <h1>Área Administrativa</h1>
        <div class="separatorTitle"></div>
    </div>

    <div id="containerAdmin">
        <div id="menuAdmin">
            <div id="teachers" class="menuOptions" onclick="hideEffect()">PROFESSORES</div>
            <div id="managements" class="menuOptions" onclick="hideEffect()">COORDENADORES</div>
            <div id="enviroments" class="menuOptions" onclick="hideEffect()">AMBIENTES</div>
            <div id="equipments" class="menuOptions" onclick="hideEffect()">EQUIPAMENTOS</div>
        </div>
        <div id="containerTable">
            <div id="tableCrud">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Disciplina</th>
                            <th scope="col">Acesso</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Regina</td>
                            <td>Maria</td>
                            <td>regina.maria33@etec.sp.gov.br</td>
                            <td>LPLCP</td>
                            <td>Liberado</td>
                            <td colspan="2">
                                <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="teste">Novo</button>
                                <button type="button" class="btn btn-info">Ver</button>
                                <button type="button" class="btn btn-info">Editar</button>
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <!-- <div class="btnNew">
                    <div class="btnNewTeste" href="{{--route('posts.create')--}}">Novo</div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Disciplina</th>
                            <th scope="col">Acesso</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Regina</td>
                            <td>Maria</td>
                            <td>regina.maria35@etec.sp.gov.br</td>
                            <td>LPLCP</td>
                            <td>Liberado</td>
                            <td>
                                <form action="{{-- route('posts.destroy', $post->id) --}}" method="POST">
                                    <div class="buttonsTable" href="{{-- route('posts.show', $post->id) --}}">New</div>
                                    <div class="buttonsTable" href="{{-- route('posts.show', $post->id) --}}">Show</div>
                                    <div class="buttonsTable" href="{{-- route('posts.edit', $post->id) --}}">Edit</div>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        
                    </tbody>
                </table> -->
            </div>
        </div>

    </div>

</main>

<!-- Modal -->
<div class="modal fade" id="teste" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

@endsection



@section('js')
<script src="/js/scriptCoordenacao.js" defer></script>

@endsection