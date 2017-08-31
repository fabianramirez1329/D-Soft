<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <table class="table table-bordered">
        <tr>
            <th colspan="6" class="nombreTabla text-center">Lista de Administradores</th>
        </tr>
        <tr>
            <th class="text-center">N°</th>
            <th class="text-center">ID</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Correo</th>
            <th colspan="2" class="text-center">Acción</th>
        </tr>
        <?php
        $con = 1;
       $mensaje="'¿Desea eliminar?'";
        foreach ($this->ListaAdministradores as $lista => $value) {
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
            echo '<td class="text-center" >';
            echo $value['correo'];
            echo '</td>';
            echo '<td class = "text-center">';
            echo '<a class="btn-sm btn-primary" href="editarAdministrador/' . $value['cedula'] . '">Editar</a> &nbsp&nbsp&nbsp';
            echo '<a class="btn-sm btn-warning" href="eliminarAdministrador/' . $value['cedula'] . '" onclick="return confirm(' . $mensaje . ');"> Eliminar</a>';
            echo '</td>';
            echo '</tr>';
            $con++;
            
        }
        ?>

 
    </table>
</center>