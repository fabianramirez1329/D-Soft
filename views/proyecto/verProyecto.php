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
            <th colspan="6" class="nombreTabla text-center">Lista de Proyectos</th>
        </tr>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Descripción</th>
            <th class="text-center">Integrantes</th>
            <th class="text-center">Categoria</th>
            <th colspan="2" class="text-center">Acción</th>
        </tr>
        <?php
        $con = 1;
        $mensaje = "'¿Desea eliminar?'";
        foreach ($this->ListaProyecto as $lista => $value) {
            echo '<tr>';
            echo '<td class="text-center">';
            echo $value['id'];
            echo '</td>';
            echo '<td class="text-center">';
            echo $value['nombre'];
            echo '</td>';
            echo '<td>';
            echo $value['descripcion'];
            echo '</td>';
            echo '<td colspan="1">';
            foreach($this->listaIntegrante as $integrante){
                if($value['id']==$integrante['idProyecto']){
                    echo $integrante['nombre'];
                    echo "<br>";
                }
            }
            echo '</td>';
            echo '<td class="text-center">';
            echo $value['categoria'];
            echo '</td>';
            echo '<td class = "text-center">';
            echo '<a class="btn-sm btn-primary" href="editarProyecto/' . $value['id'] . '">Editar</a> <br></br>';
            echo '<a class="btn-sm btn-warning" href="eliminarProyecto/' . $value['id'] . '" onclick="return confirm(' . $mensaje . ');"> Eliminar</a>';
            echo '</td>';
            echo '</tr>';
            $con++;
        }
        ?>
    </table>
</center>