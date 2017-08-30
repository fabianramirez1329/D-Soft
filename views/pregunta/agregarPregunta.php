<div class="row">
    <form id="MyForm" action="<?php echo URL; ?>pregunta/guardarPregunta" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Datos de la Pregunta</legend>
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">

                <label for="tf_descripcion" class="col-xs-2 control-label">Descripcion:</label>
                <div class="col-xs-3">
                    <input type="text" class="text-uppercase form-control input-sm"  id="tf_descripcion" name="tf_descripcion"/>
                </div>
                <br></br>               
                <label for="tf_valorPregunta" class="col-xs-2 control-label">Valor de la pregunta:</label>
                <div class="col-xs-3">
                    <input type="text" class="text-uppercase form-control input-sm"  id="tf_valorPregunta" name="tf_valorPregunta"/>
                </div>

                <br></br>
            <label for="tf_categoria" class="col-xs-2 control-label">Categoria:</label>
                <div class="col-xs-2">
                    <select class="form-control input-sm" name="tf_categoria" id="tf_categoria">
                        <option value="">Seleccione</option>
                        <?php
                        foreach ($this->consultaCategorias as $value) {
                            echo "<option value='" . $value['id'] . "'>";
                            echo $value['nombre'] . "</option>";
                        }
                        ?>
                    </select> 
                </div> 
                <br></br>
                <label for="tf_identificador" class="col-xs-2 control-label">Identificador:</label>
                <div class="col-xs-2">
                    <select class="form-control input-sm" name="tf_identificador" id="tf_identificador">
                        <option value="">Seleccione</option>
                        <?php
                        foreach ($this->consultaIdentificadores as $value) {
                            echo "<option value='" . $value['Id'] . "'>";
                            echo $value['Descripcion'] . "</option>";
                        }
                        ?>
                    </select> 
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