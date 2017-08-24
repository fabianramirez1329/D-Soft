<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <form id="MyForm" action="<?php echo URL; ?>desgloce_puntos/guardarDesgloce_puntos" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Desgloce de Puntos</legend>
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">

                <label for="tf_idP" class="col-xs-2 control-label">idP</label>
                <div class="col-xs-3">
                    <input type="text" class="text-uppercase form-control input-xlarge"  id="tf_idP" name="tf_idP"/>
                </div>
                <br></br>
                <br></br>
                <label for="tf_idJuez" class="col-xs-2 control-label">idJuez</label>
                <div class="col-xs-3">
                    <input type="text" class="text-uppercase form-control input-xlarge"  id="tf_idJuez" name="tf_idJuez"/>
                </div>
                <br></br>
                <br></br>
                <label for="tf_puntos" class="col-xs-2 control-label">Puntos</label>
                <div class="col-xs-3">
                    <input type="text" class="text-uppercase form-control input-xlarge"  id="tf_puntos" name="tf_puntos"/>
                </div>
                <br></br>
                <br></br>
             

                <!--L25 Imprimir y Guardar (Formulario Hugo)-->
                <div class="form-group"> 
                    <div class="col-xs-12 text-center">
                        <input type="submit" class="btn btn-primary" id="guardar" value="Guardar e Imprimir" />
                    </div>
                </div>
        </fieldset>
    </form>
</div>