<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <form id="MyForm" action="<?php echo URL; ?>juez/guardarJuez" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Datos del Juez</legend>
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                <label for="tf_name" class="col-xs-2 control-label">Nombre:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm validate[required]"  id="tf_name" name="tf_name"/>
                </div>
                <br></br>
                <label for="tf_id" class="col-xs-2 control-label">Cédula:</label>
                <div class="col-xs-3">
                    <input type="text" class="text-uppercase form-control input-sm"  id="tf_id" name="tf_id"/>
                </div>
                <br></br>
                <label for="tf_password" class="col-xs-2 control-label">Contraseña:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm validate[required]"  id="tf_password" name="tf_password"/>
                </div> 
                  <br></br>
                <label for="tf_cargo" class="col-xs-2 control-label">Cargo:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm validate[required]"  id="tf_cargo" name="tf_cargo"/>
                </div>
                <br></br>
                <label for="tf_empresa" class="col-xs-2 control-label">Empresa:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm validate[required]"  id="tf_empresa" name="tf_empresa"/>
                </div>
                <br></br>
                <label for="tf_numeroTelefono" class="col-xs-2 control-label">Número de teléfono:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm validate[required]"  id="tf_numeroTelefono" name="tf_numeroTelefono"/>
                </div>
                <br></br>
        
                <label for="tf_email" class="col-xs-2 control-label">Correo:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm validate[required]"  id="tf_email" name="tf_email"/>
                </div> 
            </div> 
            <!--L25 Imprimir y Guardar (Formulario Hugo)-->
            <div class="form-group"> 
                <div class="col-xs-12 text-center">
                    <input type="submit" class="btn btn-primary" id="guardar" value="Guardar e Imprimir" />
                </div>
            </div>
        </fieldset>
    </form>
</div>