$(function ()
{
    $("#buscarEstudianteRatificar").click(function (event) {
        var idD = $("#tf_cedulaEstudiante").val();
        $.getJSON('buscarEstuRatif/' + idD, function (resulBusqueda) {
            if (jQuery.isEmptyObject(resulBusqueda)) {
                alert("Pregunta no encontrada, verifique la información ingresada");
            } else {
                $("#tablaRatificar").empty();
                $('#tablaRatificar').append('<tr><th colspan="8" class="pregunta text-center">Preguntas</th></tr><tr><th>ID</th><th>Identificador</th><th>Descripcion</th><th>Categoria</th><th>Valor pregunta</th><th>Acción</th></tr>');
                var col = 1;
                for (var i = 0; i < resulBusqueda.length; i++) {

                    $('#tablaRatificar').append('<tr><td>' + col + '</td>' +
                            '<td >' + resulBusqueda[i].id + '</td>' +
                            '<td >' + resulBusqueda[i].idIdentificador + '</td>' +
                            '<td >' + resulBusqueda[i].descripcion + '</td>' +
                            '<td >' + resulBusqueda[i].categoria + '</td>' +
                            '<td >' + resulBusqueda[i].valorPregunta + '</td>' +
                            '<td ><a class="btn-sm btn-primary" href="editarPregunta/' + resulBusqueda[i].id + '">Editar</a> ' +
                            '<a class="btn-sm btn-warning" href="eliminarPregunta/' + resulBusqueda[i].id + '">Eliminar</a></td>' +
                            '</tr>');
                    col++;
                }
            }
        });
    });
});




