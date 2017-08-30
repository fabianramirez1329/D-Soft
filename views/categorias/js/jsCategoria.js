$(function ()
{
    $("#buscarEstudianteRatificar").click(function (event) {
        var idD = $("#tf_cedulaEstudiante").val();
        $.getJSON('buscarEstuRatif/' + idD, function (resulBusqueda) {
            if (jQuery.isEmptyObject(resulBusqueda)) {
                alert("Categoria no encontrada, verifique la información ingresada");
            } else {
                $("#tablaRatificar").empty();
                $('#tablaRatificar').append('<tr><th colspan="8" class="categoria text-center">Categorias</th></tr><tr><th colspan="1" class="categoria text-center">N°</th><th colspan="2" class="categoria text-center">Id</th><th colspan="3" class="categoria text-center">Nombre</th><th colspan="4" class="categoria text-center">Acción</th></tr>');
                var col = 1;
                for (var i = 0; i < resulBusqueda.length; i++) {

                    $('#tablaRatificar').append('<tr><td colspan="1" class="categoria text-center">' + col + '</td>' +
                            '<td colspan="2" class="text-center">' + resulBusqueda[i].id + '</td>' +
                            '<td colspan="3" class="text-center">' + resulBusqueda[i].nombre + '</td>' +
                            '<td colspan="4" class="text-center"><a class="btn-sm btn-primary" href="editarCategoria/' + resulBusqueda[i].id + '">Editar</a> ' +
                            '<a class="btn-sm btn-warning" href="eliminarCategoria/' + resulBusqueda[i].id + '">Eliminar</a></td>' +
                            '</tr>');
                    col++;
                }
            }
        });
    });
});




