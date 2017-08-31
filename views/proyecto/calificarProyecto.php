<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <br></br>
    <table class="table table-bordered">
        <tr>
            <th colspan="6" class="nombreTabla text-center">Aspectos por Evaluar</th>
        </tr>
        <?php
        foreach ($this->ListaIdentificador as $identificador) {
        echo '<tr>'; echo '<th class="text-center">';
                echo $identificador['Descripcion'];
                echo '</th>';
        echo '<th class="text-center">';
        echo "PTS";
        echo '</th>';
        echo '</tr>';
        foreach ($this->ListaPregunta as $pregunta) {
        if ($identificador['Id'] == $pregunta['idIdentificador']) {
        echo '<tr>';
        echo '<td>'; 
        echo $pregunta['descripcion'];
        echo '</td>';
        echo '<td>'; 
        echo 'Combo';
        echo '</td>';
        echo '</tr>';
        }
        }
        }
        ?>
    </table>
</center>