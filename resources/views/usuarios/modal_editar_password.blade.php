<!-- Modal -->
<div class="modal fade" id="modal_editar_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar password</h5>
            </div>
            <form action="">
                <input type="hidden" id="txt_editar_usuario_id">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="password" class="test-primary font-weight-bold">Password</label>
                                    <input type="password" name="password" id="txt_editar_password" class="form-control"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="password_confirmation" class="test-primary font-weight-bold">Confirmaar
                                        password</label>
                                    <input type="password" name="password_confirmation"
                                        id="txt_editar_password_confirmation" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="$('#modal_editar_password').modal('hide')" class="btn btn-secondary"
                        data-dismiss="modal">Cerrar</button>
                    <a href="javascript:void(0);" class="btn btn-primary" onclick="actualizarPassword()">Actualizar</a>
                </div>
            </form>
        </div>
    </div>
</div>
