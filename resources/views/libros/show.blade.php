<!-- Modal -->
<div class="modal fade" id="modal_libros_show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Información</h5>
            </div>
            <div class="modal-body">
                <table class="table table-stripped">
                    <tr>
                        <td class="text-primary">Títiulo</td>
                        <td id="data_libro_titulo"></td>
                    </tr>
                    <tr>
                        <td class="text-primary">Reseña</td>
                        <td id="data_libro_resenia"></td>
                    </tr>
                    <tr>
                        <td class="text-primary">Categoría</td>
                        <td id="data_libro_categoria"></td>
                    </tr>
                    <tr>
                        <td class="text-primary">Editorial</td>
                        <td id="data_libro_editorial"></td>
                    </tr>
                    <tr>
                        <td class="text-primary">ISBN</td>
                        <td id="data_libro_isbn"></td>
                    </tr>
                    <tr>
                        <td class="text-primary">Año de edición</td>
                        <td id="data_libro_anio_edicion"></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="$('#modal_libros_show').modal('hide')" class="btn btn-secondary"
                    data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
