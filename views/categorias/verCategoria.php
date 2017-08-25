<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <table class="table table-condensed" id="tablaRatificar">
        <div class="col-xs-4">
           Búsqueda por Nombre:
        </div>
        <div class="col-xs-4">
            <input type="text" class="input-sm validate[required]" name="tf_cedulaEstudiante" id="tf_cedulaEstudiante" />
        </div>
        <div class="col-xs-4">
            <input type="button" class="btn-sm btn-success" id="buscarEstudianteRatificar" value="Buscar" />
        </div>
        <br></br>
        <tr>
            <th colspan="4" class="nombreTabla text-center">Lista de Categorias</th>
        </tr>
        <tr>
            <th>N°</th>
            <th>ID</th>
            <th>Nombre</th>
            <th colspan="2" class="text-center">Acción</th>
        </tr>
        <?php
        $con = 1;
        $mensaje = "'¿Desea eliminar?'";
        foreach ($this->ListaCategoria as $lista => $value) {
            echo '<tr>';
            echo '<td>';
            echo $con;
            echo '</td>';
            echo '<td>';
            echo $value['id'];
            echo '</td>';
            echo '<td>';
            echo $value['nombre'];
            echo '</td>';
            echo '<td class = "text-center">';
            echo '<a class="btn-sm btn-primary" href="editarCategoria/' . $value['id'] . '">Editar</a> &nbsp&nbsp&nbsp';
            echo '<a class="btn-sm btn-warning" href="eliminarCategoria/' . $value['id'] . '" onclick="return confirm(' . $mensaje . ');"> Eliminar</a>';
            echo '</td>';
            echo '</tr>';
            $con++;
        }
        ?>
        <tr>
            <td colspan='4' class="lineaFin"></td
        </tr>
        <tr>
            <td colspan='4'>Última línea</td>
        </tr>
    </table>
</center>