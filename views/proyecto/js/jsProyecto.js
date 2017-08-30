$(function ()
{
    $("#buscarEstudianteRatificar").click(function (event) {
        var idD = $("#tf_cedulaEstudiante").val();
        $.getJSON('buscarEstuRatif/' + idD, function (resulBusqueda) {
            if (jQuery.isEmptyObject(resulBusqueda)) {
                alert("Proyecto no encontrada, verifique la información ingresada");
            } else {
                $("#tablaRatificar").empty();
                $('#tablaRatificar').append('<tr><th colspan="8" class="proyecto text-center">Proyecto</th></tr><tr><th>N°</th><th>id</th><th>Nombre</th><th>Descripción</th><th>Integrantes</th><th>Categoria</th><th>Acción</th></tr>');
                var col = 1;
                for (var i = 0; i < resulBusqueda.length; i++) {

                    $('#tablaRatificar').append('<tr><td>' + col + '</td>' +
                            '<td>' + resulBusqueda[i].id + '</td>' +
                            '<td>' + resulBusqueda[i].nombre + '</td>' +
                            '<td>' + resulBusqueda[i].descripcion + '</td>' +
                            '<td>' + resulBusqueda[i].integrantes + '</td>' +
                            '<td>' + resulBusqueda[i].categoria + '</td>' +
                            '<td><a class="btn-sm btn-primary" href="editarProyecto/' + resulBusqueda[i].id + '">Editar</a> ' +
                            '<a class="btn-sm btn-warning" href="eliminarProyecto/' + resulBusqueda[i].id + '">Eliminar</a></td>' +
                            '</tr>');
                    col++;
                }
            }
        });
    });
});


