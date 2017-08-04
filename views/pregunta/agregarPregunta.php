<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <form id="MyForm" action="<?php echo URL; ?>pregunta/guardarPregunta" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Datos de la Pregunta</legend>
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                <label for="tf_id" class="col-xs-2 control-label">id:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm validate[required]"  id="tf_id" name="tf_id"/>
                </div>
                <br></br>
                <label for="tf_descripcion" class="col-xs-2 control-label">Descripcion:</label>
                <div class="col-xs-3">
                    <input type="text" class="text-uppercase form-control input-xlarge"  id="tf_descripcion" name="tf_descripcion"/>
                </div>
                <br></br>
                <label for="tf_valorPregunta" class="col-xs-2 control-label">Valor de la pregunta:</label>
                <div class="col-xs-3">
                    <input type="text" class="text-uppercase form-control input-xlarge"  id="tf_valorPregunta" name="tf_valorPregunta"/>
                </div>
                <br></br>
                <label for="tf_categoria" class="col-xs-2 control-label">Categoria:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm validate[required]"  id="tf_categoria" name="tf_categoria"/>
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