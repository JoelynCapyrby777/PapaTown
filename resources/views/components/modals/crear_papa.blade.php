<div class="modal fade" id="modalCrear" tabindex="-1" aria-labelledby="modalCrearLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="modalCrearLabel">Registrar Nueva Papa</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <form action="{{ route('crud.view.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="crearNombreComun" class="form-label">Nombre Común</label>
                            <input type="text" class="form-control" id="crearNombreComun" placeholder="Ej. Papa Rosada"
                                name="nombre_comun" required>
                        </div>
                        <div class="col-md-6">
                            <label for="crearNombreCientifico" class="form-label">Nombre Científico</label>
                            <input type="text" class="form-control" id="crearNombreCientifico"
                                placeholder="Ej. Solanum tuberosum" name="nombre_cientifico" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Origen</label>
                            <input type="text" class="form-control" placeholder="Ej. Andes" name="origen" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Forma</label>
                            <input type="text" class="form-control" placeholder="Ej. Ovalada" name="forma" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Color Piel</label>
                            <input type="text" class="form-control" placeholder="Ej. Roja" name="color_piel" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Color Pulpa</label>
                            <input type="text" class="form-control" placeholder="Ej. Amarilla" name="color_pulpa"
                                required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Guardar Papa</button>
                </div>

            </form>
        </div>
    </div>
</div>