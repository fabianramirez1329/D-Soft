<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
        <div class="col-xs-5">
        <label for="tf_name" class="col-xs-12 control-label">Busqueda por descripcion:</label>
    </div>
    <div class="col-xs-1">
        <input type="text" class="input-xs validate[required]" name="tf_cedulaEstudiante" id="tf_cedulaEstudiante" />
    </div>
    <div class="col-xs-3">
        <input type="button" class="btn-sm btn-success" id="buscarEstudianteRatificar" value="Buscar" />
    </div>
    <br></br>
    <br></br>
    <table class="table table-bordered" id = "tablaRatificar">
        <tr>
            <th colspan="7" class="nombreTabla text-center">Lista de Preguntas</th>
        </tr>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Identificador</th>
            <th class="text-center">Descripcion</th>
            <th class="text-center">Categoria</th>
            <th class="text-center"> Valor Pregunta</th>
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
            foreach ($this->ListaIdentificador as $values) {
                if ($values['Id'] == $value ['idIdentificador']) {
                    echo $values['Descripcion'];
                }
            }
            echo '</td>';

            echo '<td>';
            echo $value['descripcion'];
            echo '</td>';
            echo '<td>';
            foreach ($this->ListaCategoria as $val) {
                if ($val['id'] == $value ['codigo']) {
                    echo $val['nombre'];
                }
            }

            echo '</td>';
            echo '<td class="text-center">';
            echo $value['valorPregunta'];
            echo '</td>';
           
            echo '<td>';
            echo '<a class="btn-xs btn-primary" href="editarPregunta/' . $value['id'] . '">Editar</a> <br></br>';
            echo '<a class="btn-xs btn-warning" href="eliminarPregunta/' . $value['id'] . '" onclick="return confirm(' . $mensaje . ');"> Eliminar</a>';
            echo '</td>';
            
            echo '</tr>';
        }
        ?>
       
    </table>
</center>