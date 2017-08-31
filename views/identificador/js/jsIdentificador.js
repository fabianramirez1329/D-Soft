$(function ()
{
    $("#buscarEstudianteRatificar").click(function (event) {
        var idD = $("#tf_cedulaEstudiante").val();
        $.getJSON('buscarEstuRatif/' + idD, function (resulBusqueda) {
            if (jQuery.isEmptyObject(resulBusqueda)) {
                alert("Identificador no encontrada, verifique la información ingresada");
            } else {
                $("#tablaRatificar").empty();
                $('#tablaRatificar').append('<tr><th colspan="8" class="identificador text-center">Identificadores</th></tr><tr><th>N°</th><th>ID</th><th>Descripcion</th><th>Puntaje Máximo</th><th>Acción</th></tr>');
                var col = 1;
                for (var i = 0; i < resulBusqueda.length; i++) {

                    $('#tablaRatificar').append('<tr><td>' + col + '</td>' +
                            '<td >' + resulBusqueda[i].Id + '</td>' +
                            '<td >' + resulBusqueda[i].Descripcion + '</td>' +
                            '<td >' + resulBusqueda[i].Puntos + '</td>' +
                            '<td ><a class="btn-sm btn-primary" href="editarIdentificador/' + resulBusqueda[i].Id + '">Editar</a> ' +
                            '<a class="btn-sm btn-warning" href="eliminarIdentificador/' + resulBusqueda[i].Id + '">Eliminar</a></td>' +
                            '</tr>');
                    col++;
                }
            }
        });
    });
});




