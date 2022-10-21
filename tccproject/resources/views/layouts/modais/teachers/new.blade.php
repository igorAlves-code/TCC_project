<!-- Modal Cadastro Professor -->
<div class="modal fade" id="newTeacher" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newTeacherLabel">Cadastrar Professor</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form name="formCad" action="{{url('teachers')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nameTeacher" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nameTeacher" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="middleNameTeacher" class="form-label">Sobrenome</label>
                        <input type="text" class="form-control" id="middleNameTeacher" name="sobrenome" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="emailTeacher" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailTeacher" name="email" aria-describedby="emailHelp" required>
                    </div>
                    {{-- Senha => acho que será definida na Controller ou Model
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
                        </div>
                    --}}
                    <div class="mb-3">
                        <label for="subjectTeacher" class="form-label">Disciplina</label>
                        <input type="text" class="form-control" id="subjectTeacher" name="disciplina" aria-describedby="emailHelp" required>
                    </div>
                    {{-- Acesso => acho que será definido na Controller ou Model
                        <div class="mb-3">
                            <label for="emailTeacher" class="form-label">Acesso</label>
                            <input type="text" class="form-control" id="emailTeacher" name="acesso" aria-describedby="emailHelp">
                        </div>
                    --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <a href="{{url('teachers')}}">
                    <button type="submit" class="btn btn-outline-primary" id="env">Cadastrar</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
