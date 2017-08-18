<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <table class="table table-condensed">
        <tr>
            <th colspan="6" class="nombreTabla text-center">Lista de Preguntas</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Descripcion</th>
            <th>Categoria</th>
            <th>Valor Pregunta</th>
            <th colspan="2" class="text-center">Acción</th>
        </tr>
        <?php
        $mensaje = "'¿Desea eliminar?'";
        foreach ($this->ListaPregunta as $lista => $value) {
            echo '<tr>';
            echo '<td>';
            echo $value['id'];
            echo '</td>';
            echo '<td>';
            echo $value['descripcion'];
            echo '</td>';
            echo '<td>';
            if ($value['categoria'] == "ei") {
                echo 'Expo-Ingenieria';
            } elseif ($value['categoria'] == "se") {
                echo 'Semillitas';
            }elseif ($value['categoria'] == "ej") {
                echo 'Expo-Joven';
            }elseif ($value['categoria'] == "fc") {
                echo 'Feria Cientifica';
            }
      
            echo '</td>';
            echo '<td>';
            echo $value['valorPregunta'];
            echo '<td>';
            echo '<td class = "text-center">';
            echo '<a class="btn-sm btn-primary" href="editarPregunta/' . $value['id'] . '">Editar</a> &nbsp&nbsp&nbsp';
            echo '<a class="btn-sm btn-warning" href="eliminarPregunta/' . $value['id'] . '" onclick="return confirm(' . $mensaje . ');"> Eliminar</a>';
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