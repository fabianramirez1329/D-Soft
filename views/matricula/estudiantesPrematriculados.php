<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <table class="table table-condensed">
        <tr>
            <th colspan="6" class="nombreTabla text-center">Lista de Jueces</th>
        </tr>
        <tr>
            <th>N°</th>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th colspan="2" class="text-center">Acción</th>
        </tr>
        <?php
        $con = 1;
        foreach ($this->ListaJueces as $lista => $value) {
            echo '<tr>';
            echo '<td>';
            echo $con;
            echo '</td>';
            echo '<td>';
            echo $value['cedula'];
            echo '</td>';
            echo '<td>';
            echo $value['apellido1'];
            echo '</td>';
            echo '<td>';
            echo $value['apellido2'];
            echo '</td>';
            echo '<td>';
            echo '<a class="btn-sm btn-primary" href="editarPreatricula/' . $value['cedula'] . '">Editar</a>';
            echo '</td>';
            echo '</tr>';
            $con++;
        }
        ?>
        <tr>
            <td colspan='6' class="lineaFin"></td>
        </tr>
        <tr>
            <td colspan='6'>Última línea</td>
        </tr>
    </table>
</center>