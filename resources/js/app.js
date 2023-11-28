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
