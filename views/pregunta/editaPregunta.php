<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Editar Pregunta</h1>
    <form id="MyForm" action="<?php echo URL; ?>pregunta/actualizarPregunta" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Datos de la Pregunta</legend>
 
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            
            <div class="form-group">
                <label for="tf_name" class="col-xs-2 control-label">ID:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="tf_name" name="tf_name" value="<?php echo $this->DatosJuez[0]['nombre']; ?>"/>
                </div>
                <label for="tf_id" class="col-xs-2 control-label">Descripcion:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm"  id="tf_id" name="tf_id" value="<?php echo $this->DatosJuez[0]['cedula']; ?>" disabled=" "/>
                    <input type="hidden"   id="tf_id" name="tf_id" value='<?php echo $this->DatosJuez[0]['cedula']; ?>'/>
                   
                </div>
                <label for="tf_email" class="col-xs-2 control-label">Categoria:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="tf_email" name="tf_email" value="<?php echo $this->DatosJuez[0]['correo']; ?>"/>
                </div> 
                <label for="tf_name" class="col-xs-2 control-label">Valor de Pregunta:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="tf_name" name="tf_name" value="<?php echo $this->DatosJuez[0]['nombre']; ?>"/>
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