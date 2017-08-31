<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <br></br>
    <table class="table table-bordered">
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
            echo $value['categoria'];
       
            echo '</td>';
            echo '</tr>';
            $con++;
        }
        ?>
    </table>
</center>