<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <form id="MyForm" action="<?php echo URL; ?>proyecto/guardarProyecto" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Datos del Proyecto</legend>
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                <label for="tf_name" class="col-xs-2 control-label">Nombre del Proyecto:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm validate[required]"  id="tf_name" name="tf_name"/>
                </div>
                <br></br>
                <label for="tf_descripcion" class="col-xs-2 control-label">Descripción:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm validate[required]"  id="tf_descripcion" name="tf_descripcion"/>
                </div>
                <br></br>
                <label for="tf_integrantes" class="col-xs-2 control-label">Integrantes:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm validate[required]"  id="tf_integrantes" name="tf_integrantes"/>
                </div> 
                <br></br>
                <label for="tf_categoria" class="col-xs-2 control-label">Categoria:</label>
                <div class="col-xs-3">
                    <SELECT class="form-control input-sm" NAME="cmb_categoria" SIZE=1 onChange=""> 
                       <option value="">Seleccione</option>
                        <?php
                        foreach ($this->consultaCategorias as $value) {
                            echo "<option value='" . $value['nombre'] . "'>";
                            echo $value['nombre'] . "</option>";
                        }
                        ?>
                    </SELECT> 
                </div> 
            </div> 
            <!--L25 Imprimir y Guardar (Formulario Hugo)-->
            <div class="form-group"> 
                <div class="col-xs-12 text-center">
                    <input type="submit" class="btn btn-primary" id="guardar" value="Guardar" />
                </div>
            </div>
        </fieldset>
    </form>
</div>