<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Editar Categoria</h1>
    <form id="MyForm" action="<?php echo URL; ?>categoria/actualizarCategoria" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS DE LA CATEGORIA</legend>
 
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                <label for="tf_name" class="col-xs-2 control-label">Nombre:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="tf_name" name="tf_name" value="<?php echo $this->DatosCategoria[0]['nombre']; ?>"/>
                </div>
                <label for="tf_id" class="col-xs-2 control-label">Id:</label>
               
                <div class="col-xs-2">
                   <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="tf_id" name="tf_id" value="<?php echo $this->DatosCategoria[0]['id']; ?>" disabled=" "/>
                    <input type="hidden"   id="tf_id" name="tf_id" value='<?php echo $this->DatosCategoria[0]['id']; ?>'/>
                  </div>
                     <div class="form-group">
                <label for="tf_codigo" class="col-xs-2 control-label">Codigo:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="tf_codigo" name="tf_codigo" value="<?php echo $this->DatosCategoria[0]['codigo']; ?>"/>
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