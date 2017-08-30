<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Editar Proyecto</h1>
    <form id="MyForm" action="<?php echo URL; ?>proyecto/actualizarProyecto" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS DEL ESTUDIANTE</legend>

            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                <label for="tf_id" class="col-xs-2 control-label">ID:</label>
                <div class="col-xs-2">
                    <input type="text" class="form-control input-sm validate[required]"  id="tf_id" name="tf_id" value="<?php echo $this->DatosProyecto[0]['id']; ?>" disabled=" "/>
                    <input type="hidden"   id="tf_id" name="tf_id" value='<?php echo $this->DatosProyecto[0]['id']; ?>'/>

                </div>
                <br></br>
                <label for="tf_name" class="col-xs-2 control-label">Nombre del Proyecto:</label>
                <div class="col-xs-2">
                    <input type="text" class="form-control input-sm validate[required]"  id="tf_name" name="tf_name" value="<?php echo $this->DatosProyecto[0]['nombre']; ?>"/>
                </div>
                <br></br>
                <label for="tf_descripcion" class="col-xs-2 control-label">Descripción:</label>
                <div class="col-xs-2">
                    <input type="text" class="form-control input-sm validate[required]"  id="tf_descripcion" name="tf_descripcion" value="<?php echo $this->DatosProyecto[0]['descripcion']; ?>"/>
                </div>
                <br></br>
                <label for="tf_integrantes" class="col-xs-2 control-label">Integrantes:</label>
                <div class="col-xs-2">
                    <input type="text" class="form-control input-sm validate[required]"  id="tf_integrantes" name="tf_integrantes" value="<?php echo $this->DatosProyecto[0]['integrantes']; ?>"/>
                </div> 
                <br></br>
               <label for="tf_categoria" class="col-xs-2 control-label">Categoria:</label>
                <div class="col-xs-2">
                    <select class="form-control input-sm" name="cmb_categoria" id="tf_categoria">
                        <option value="">Seleccione</option>
                        <?php
                        foreach ($this->consultaCategorias as $value) {
                            echo "<option value='" . $value['nombre'] . "'>";
                            echo $value['nombre'] . "</option>";
                        }
                        ?>
                    </select> 
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