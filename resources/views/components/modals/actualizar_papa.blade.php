<div class="modal fade" id="modalActualizar{{ $papa['id'] }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title">Editar Papa #{{ $papa['id'] }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('crud.view.update', $papa['id']) }}" method="POST">
                @csrf
                @method('PUT') <div class="modal-body">

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Nombre Común</label>
                            <input type="text" class="form-control" name="nombre_comun"
                                value="{{ $papa['nombre_comun'] }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nombre Científico</label>
                            <input type="text" class="form-control" name="nombre_cientifico"
                                value="{{ $papa['nombre_cientifico'] }}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Origen</label>
                            <input type="text" class="form-control" name="origen" value="{{ $papa['origen'] }}"
                                required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Forma</label>
                            <input type="text" class="form-control" name="forma" value="{{ $papa['forma'] }}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Color Piel</label>
                            <input type="text" class="form-control" name="color_piel" value="{{ $papa['color_piel'] }}"
                                required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Color Pulpa</label>
                            <input type="text" class="form-control" name="color_pulpa"
                                value="{{ $papa['color_pulpa'] }}" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-warning">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>