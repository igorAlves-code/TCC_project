    <!-- Modal Pesquisa Ambiente -->
    <div class="modal fade" id="selectTypeEnviroment" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="selectTypeEnviromentLabel">Filtrar por Discipliba</h5>
                    <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
                </div>
                <form action=" {{ route('teachers.index') }} " method="get">
                    <div class="modal-body">
                        <div class="mb-3">
                            <input class="form-control me-2" type="search" name="search" placeholder="Disciplina"
                                aria-label="Search">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-outline-primary" id="env">Pesquisar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
