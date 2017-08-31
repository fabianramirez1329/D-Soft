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
        <tr>
            <th colspan="6" class="nombreTabla text-center">Lista de Jueces</th>
        </tr>
        <tr>
            <th class="text-center">N°</th>
            <th class="text-center" >ID</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Correo</th>
            <th colspan="2" class="text-center">Acción</th>
        </tr>
        <?php
        $con = 1;
       $mensaje="'¿Desea eliminar?'";
        foreach ($this->ListaJueces as $lista => $value) {
            echo '<tr>';
            echo '<td>';
            echo $con;
            echo '</td>';
            echo '<td class="text-center">';
            echo $value['cedula'];
            echo '</td>';
            echo '<td class="text-center">';
            echo $value['nombre'];
            echo '</td>';
            echo '<td class="text-center">';
            echo $value['correo'];
            echo '</td>';
            echo '<td class = "text-center">';
            echo '<a class="btn-sm btn-primary" href="editarJuez/' . $value['cedula'] . '">Editar</a> &nbsp&nbsp&nbsp';
            echo '<a class="btn-sm btn-warning" href="eliminarJuez/' . $value['cedula'] . '" onclick="return confirm(' . $mensaje . ');"> Eliminar</a>';
            echo '</td>';
            echo '</tr>';
            $con++;
            
        }
        ?>

    </table>
</center>