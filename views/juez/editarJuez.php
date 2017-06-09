<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Editar Juez</h1>
    <form id="MyForm" action="<?php echo URL; ?>juez/editarJuez" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS DEL ESTUDIANTE</legend>
 
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                <label for="tf_name" class="col-xs-2 control-label">Nombre:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="nombre" name="nombre" value='<?php echo $this->DatosJuez[0]['nombre']; ?>'/>
                </div>
                <label for="tf_id" class="col-xs-2 control-label">Cedula:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm"  id="cedula" name="cedula" value='<?php echo $this->DatosJuez[0]['cedula']; ?>'/>
                </div>
                <label for="tf_email" class="col-xs-2 control-label">Correo:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="correo" name="correo" value='<?php echo $this->DatosJuez[0]['correo']; ?>'/>
                </div> 
            </div> 
           
           
            <br><br>
            <!--L25 Imprimir y Guardar (Formulario Hugo)-->
            <div class="form-group"> 
                <div class="col-xs-12 text-center">
                    <input type="submit" class="btn btn-primary" id="guardar" value="Guardar" />
                </div>
            </div>
        </fieldset>
    </form>
</div>