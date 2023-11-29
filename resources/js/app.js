//require("./bootstrap");
import axios from "axios";
$(document).ready(function () {
    $(".basic-multiple-select").select2();
    $("#form_buscar_titulo").submit(function (e) {
        e.preventDefault();
        const ruta = $("#form_buscar_titulo").prop("action");
        const q = $("#txt_buscar_titulo").val();
        if (q.length > 0) {
            window.location = ruta + "/" + q;
        }
    });
});

window.buscarCategoria = (categoria_id) => {
    if (categoria_id.length > 0) {
        window.location = "/categoria/" + categoria_id;
    } else {
        window.location = "/";
    }
};

window.mensajeCorrecto = (texto) => alertify.success(texto);

window.mensajeError = (texto) => alertify.error(texto);

window.verLibro = (libro_id) => {
    axios
        .get("/libros_show/" + libro_id)
        .then((response) => {
            $("#data_libro_titulo").text(response.data.titulo);
            $("#data_libro_resenia").text(response.data.resenia);
            $("#data_libro_categoria").text(response.data.categoria.nombre);
            $("#data_libro_editorial").text(response.data.editorial.nombre);
            $("#data_libro_isbn").text(response.data.isbn);
            $("#data_libro_anio_edicion").text(response.data.anio_edicion);
            $("#modal_libros_show").modal("show");
        })
        .catch((error) => {
            console.log(error);
        });
};

window.eliminarLibro = (libro_id) => {
    alertify.confirm(
        "Alerta",
        "¿Realmente desea eliminar este registro?",
        function () {
            $("#form_libro_delete_" + libro_id).submit();
        },
        function () {}
    );
};

window.eliminarAutor = (autor_id) => {
    alertify.confirm(
        "Alerta",
        "Si elimina este registro se eliminarán también todos los registros asociados a este\n¿Realmente desea eliminar este registro?",
        function () {
            $("#form_autores_delete_" + autor_id).submit();
        },
        function () {}
    );
};

window.eliminarCategoria = (categoria_id) => {
    alertify.confirm(
        "Alerta",
        "Si elimina este registro se eliminarán también todos los libros asociados a este\n¿Realmente desea eliminar este registro?",
        function () {
            $("#form_categorias_delete_" + categoria_id).submit();
        },
        function () {}
    );
};

window.eliminarEditorial = (editorial_id) => {
    alertify.confirm(
        "Alerta",
        "Si elimina este registro se eliminarán también todos los libros asociados a este\n¿Realmente desea eliminar este registro?",
        function () {
            $("#form_editoriales_delete_" + editorial_id).submit();
        },
        function () {}
    );
};

window.eliminarUsuario = (usuario_id) => {
    alertify.confirm(
        "Alerta",
        "¿Realmente desea eliminar este registro?",
        function () {
            $("#form_usuarios_delete_" + usuario_id).submit();
        },
        function () {}
    );
};

window.editarPassword = (usuario_id) => {
    $("#txt_editar_usuario_id").val(usuario_id);
    $("#modal_editar_password").modal("show");
};

window.actualizarPassword = () => {
    let usuario_id = $("#txt_editar_usuario_id").val();
    let password = $("#txt_editar_password").val();
    let password_confirmation = $("#txt_editar_password_confirmation").val();
    if (password == password_confirmation) {
        if (password.length >= 6) {
            axios
                .post("/usuarios_update_password", {
                    _token: $('meta[name="csrf-token"]').attr("content"),
                    _method: "PUT",
                    usuario_id: usuario_id,
                    password: password,
                })
                .then((response) => {
                    if (response.data.error == 0) {
                        mensajeCorrecto(response.data.message);
                        $("#txt_editar_usuario_id").val("");
                        $("#txt_editar_password").val("");
                        $("#modal_editar_password").modal("hide");
                    } else {
                        mensajeError(response.data.message);
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        } else {
            mensajeError("La contraseña debe contener por lo menos 6 dígitos.");
        }
    } else {
        mensajeError("Las confirmación no coincide.");
    }
};
