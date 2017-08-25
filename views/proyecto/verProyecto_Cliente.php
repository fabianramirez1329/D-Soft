<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <table class="table table-condensed">
        <tr>
            <th colspan="6" class="nombreTabla text-center">Lista de Proyectos</th>
        </tr>
        <tr>
            <th>N°</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Integrantes</th>
            <th>Categoria</th>
        </tr>
        <?php
        $con = 1;
        $mensaje = "'¿Desea eliminar?'";
        foreach ($this->ListaProyecto_Cliente as $lista => $value) {
            echo '<tr>';
            echo '<td>';
            echo $con;
            echo '</td>';
            echo '<td>';
            echo $value['nombre'];
            echo '</td>';
            echo '<td>';
            echo $value['descripcion'];
            echo '</td>';
            echo '<td>';
            echo $value['integrantes'];
            echo '</td>';
            echo '<td>';
            if ($value['categoria'] == "ei") {
                echo 'Expo-Ingenieria';
            } elseif ($value['categoria'] == "se") {
                echo 'Semillitas';
            } elseif ($value['categoria'] == "ej") {
                echo 'Expo-Joven';
            } elseif ($value['categoria'] == "fc") {
                echo 'Feria Cientifica';
            }
            echo '</td>';
            echo '</tr>';
            $con++;
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