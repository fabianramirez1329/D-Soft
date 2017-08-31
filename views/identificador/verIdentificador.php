<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <div class="col-xs-5">
        <label for="tf_name" class="col-xs-12 control-label">Busqueda por nombre:</label>
    </div>
    <div class="col-xs-1">
        <input type="text" class="input-xs validate[required]" name="tf_cedulaEstudiante" id="tf_cedulaEstudiante" />
    </div>
    <div class="col-xs-3">
        <input type="button" class="btn-sm btn-success" id="buscarEstudianteRatificar" value="Buscar" />
    </div>
    <br></br>
    <table class="table table-bordered" id="tablaRatificar">
        <br></br>
        <tr>
            <th colspan="6" class="nombreTabla text-center">Lista de identificadores</th>
        </tr>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Descripción</th>
            <th class="text-center">Puntos</th>
            <th colspan="2" class="text-center">Acción</th>
        </tr>
        <?php
        $mensaje = "'¿Desea eliminar?'";
        foreach ($this->ListaIdentificador as $lista => $value) {
            echo '<tr>';
            echo '<td class="text-center">';
            echo $value['Id'];
            echo '</td>';
            echo '<td>';
     
            echo $value['Descripcion'];
            echo '</td>';
             echo '<td class="text-center">';
            echo $value['Puntos'];
            echo '</td>';
            echo '<td class = "text-center">';
            echo '<a class="btn-sm btn-primary" href="editarIdentificador/' . $value['Id'] . '">Editar</a> &nbsp&nbsp&nbsp';
            echo '<a class="btn-sm btn-warning" href="eliminarIdentificador/' . $value['Id'] . '" onclick="return confirm(' . $mensaje . ');"> Eliminar</a>';
            echo '</td>';
            echo '</tr>';
        }
        ?>
        
    </table>
</center>