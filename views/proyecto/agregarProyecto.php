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
                <label for="tf_integrantes1" class="col-xs-2 control-label">Integrante 1:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm "  id="tf_integrantes1" name="tf_integrantes1"/>
                </div> 
                <br></br>
                 <label for="tf_integrantes2" class="col-xs-2 control-label">Integrante 2:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm "  id="tf_integrantes2" name="tf_integrantes2"/>
                </div> 
                <br></br>
                 <label for="tf_integrantes3" class="col-xs-2 control-label">Integrante 3:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm "  id="tf_integrantes3" name="tf_integrantes3"/>
                </div> 
                <br></br>
                 <label for="tf_integrantes4" class="col-xs-2 control-label">Integrante 4:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm "  id="tf_integrantes4" name="tf_integrantes4"/>
                </div> 
                <br></br>
                
                <label for="tf_integranteLider" class="col-xs-2 control-label">Integrante lider:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm validate[required]"  id="tf_integranteLider" name="tf_integranteLider"/>
                </div>
                <br></br>
                <label for="tf_categoria" class="col-xs-2 control-label">Categoria:</label>
                <div class="col-xs-3">
                    <SELECT class="form-control input-sm validate[required]" NAME="cmb_categoria" SIZE=1 onChange=""> 
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