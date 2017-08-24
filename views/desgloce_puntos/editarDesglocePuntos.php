<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Editar Desgloce de Puntos</h1>
    <form id="MyForm" action="<?php echo URL; ?>desgloce_puntos/guardarDesgloce_puntos" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Editar Desgloce de Puntos</legend>

            <!--L2 Nombre Estudiante (Formulario Hugo)-->

            <div class="form-group">


                <label for="tf_idP" class="col-xs-2 control-label">idP:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="tf_idP" name="tf_idP" value="<?php echo $this->datosDesglocePuntos[0]['idP']; ?>"/>
                </div>
                <br></br>
                <br></br>
                <label for="tf_idJuez" class="col-xs-2 control-label">idJuez:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="tf_idJuez" name="tf_idJuez" value="<?php echo $this->datosDesglocePuntos[0]['idJuez']; ?>"/>
                </div>
                <br></br>
                <br></br>
                <label for="tf_puntos" class="col-xs-2 control-label">Puntos:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="tf_puntos" name="tf_puntos" value="<?php echo $this->datosDesglocePuntos[0]['puntos']; ?>" disabled=" "/>
                    <input type="hidden"   id="tf_puntos" name="tf_puntos" value='<?php echo $this->datosDesglocePuntos[0]['puntos']; ?>'/>
                </div>
                <br></br>
                <br></br>
                


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