<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <form id="MyForm" action="<?php echo URL; ?>identificador/guardarIdentificador" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Datos del identificador</legend>
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">

                <label for="tf_descripcion" class="col-xs-2 control-label">Descripción:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-xs"  id="tf_descripcion" name="tf_descripcion"/>
                </div>
                <br></br>
                <br></br>
                <label for="tf_puntaje" class="col-xs-2 control-label">Puntaje máximo:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-xs"  id="tf_puntaje" name="tf_puntaje"/>
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