<!-- Modal Cadastro Ambiente -->
<div class="modal fade" id="newTeacher" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newTeacherLabel">Cadastrar Professor</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="{{ route('teachers.store') }}" method="post">
            @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" aria-describedby="nameHelp" value="{{ old('nome') }}">
                    </div>
                    <div class="mb-3">
                        <label for="sobrenome" class="form-label">Sobrenome</label>
                        <input type="text" class="form-control" name="sobrenome" aria-describedby="middlenameHelp" value="{{ old('sobrenome') }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" aria-describedby="emailHelp" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="disciplina" class="form-label">Disciplina</label>
                        <input type="text" class="form-control" name="disciplina" aria-describedby="emailHelp" value="{{ old('disciplina') }}">
                    </div>
                    <div class="mb-3">
                        <label for="acesso" class="form-label">Acesso</label>
                        <select class="form-select form-control" name="acesso" aria-label="Default select example" value="{{ old('acesso') }}">>
                            <option selected="true" disabled="disabled">Selecione o tipo do acesso</option>
                            <option value="0">Liberado</option>
                            <option value="1">Bloqueado</option>
                            <option value="2">Teste</option>
                          </select>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnDanger" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-primary" id="env">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
