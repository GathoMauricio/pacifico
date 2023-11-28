//require("./bootstrap");
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
