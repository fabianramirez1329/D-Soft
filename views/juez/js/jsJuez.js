$(function ()
{
    $("#buscarEstudianteRatificar").click(function (event) {
        var idD = $("#tf_cedulaEstudiante").val();
        $.getJSON('buscarEstuRatif/' + idD, function (resulBusqueda) {
            if (jQuery.isEmptyObject(resulBusqueda)) {
                alert("Juez no encontrada, verifique la información ingresada");
            } else {
                $("#tablaRatificar").empty();
                $('#tablaRatificar').append('<tr><th colspan="8" class="proyecto text-center">Juez</th></tr><tr><th>N°</th><th>id</th><th>Nombre</th><th>Correo</th><th>Acción</th></tr>');
                var col = 1;
                for (var i = 0; i < resulBusqueda.length; i++) {
                    if (resulBusqueda[i].tipoUsuario == 2) {
                        $('#tablaRatificar').append('<tr><td>' + col + '</td>' +
                                '<td>' + resulBusqueda[i].cedula + '</td>' +
                                '<td>' + resulBusqueda[i].nombre + '</td>' +
                                '<td>' + resulBusqueda[i].correo + '</td>' +
                                '<td><a class="btn-sm btn-primary" href="editarJuez/' + resulBusqueda[i].cedula + '">Editar</a> ' +
                                '<a class="btn-sm btn-warning" href="eliminarJuez/' + resulBusqueda[i].cedula + '">Eliminar</a></td>' +
                                '</tr>');
                    }
                    col++;
                }
            }
        });
    });
});


