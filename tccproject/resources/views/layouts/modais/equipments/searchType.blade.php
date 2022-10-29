<link rel="stylesheet" href="/css/styleCoordenacao.css">

<!-- Modal Pesquisa Equipamento -->
<div class="modal fade" id="searchTypeEquipment" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="searchTypeEquipmentLabel">Filtrar por Tipo</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action=" {{ route('equipments.index') }} " method="get">
                <div class="modal-body">
                    <div class="mb-3">
                        <input class="form-control me-2" type="search" name="search" placeholder="Tipo de Equipamento"
                            aria-label="Search">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnDanger" class="btn btn-danger" data-dismiss="modal"
                        style="background-color: #dc3545;">Cancelar</button>
                    <button type="submit" class="btn btn-outline-primary" id="env">Pesquisar</button>
                </div>
            </form>
        </div>
    </div>
</div>
