<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <table class="table table-condensed">
        <tr>
            <th colspan="6" class="nombreTabla text-center">Lista de identificadores</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Puntos</th>
            <th colspan="2" class="text-center">Acción</th>
        </tr>
        <?php
        $mensaje = "'¿Desea eliminar?'";
        foreach ($this->ListaIdentificador as $lista => $value) {
            echo '<tr>';
            echo '<td>';
            echo $value['Id'];
            echo '</td>';
            echo '<td>';
            echo $value['titulo'];
            echo '</td>';
            echo '<td>';
            echo $value['Descripcion'];
            echo '</td>';
             echo '<td>';
            echo $value['Puntos'];
            echo '</td>';
            echo '<td>';
            echo '<td class = "text-center">';
            echo '<a class="btn-sm btn-primary" href="editarPregunta/' . $value['Id'] . '">Editar</a> &nbsp&nbsp&nbsp';
            echo '<a class="btn-sm btn-warning" href="eliminarPregunta/' . $value['Id'] . '" onclick="return confirm(' . $mensaje . ');"> Eliminar</a>';
            echo '</td>';
            echo '</tr>';
        }
        ?>
        <tr>
            <td colspan='6' class="lineaFin"></td
        </tr>
        <tr>
            <td colspan='6'>Última línea</td>
        </tr>
    </table>
</center>