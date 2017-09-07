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
                    <input type="text" class="form-control input-sm "  id="tf_id" name="tf_id" value="<?php echo $this->DatosProyecto[0]['id']; ?>" disabled=" "/>
                    <input type="hidden"   id="tf_id" name="tf_id" value='<?php echo $this->DatosProyecto[0]['id']; ?>'/>

                </div>
                <br></br>
                <label for="tf_name" class="col-xs-2 control-label">Nombre del Proyecto:</label>
                <div class="col-xs-2">
                    <input type="text" class="form-control input-sm "  id="tf_name" name="tf_name" value="<?php echo $this->DatosProyecto[0]['nombre']; ?>"/>
                </div>
                <br></br>
                <label for="tf_descripcion" class="col-xs-2 control-label">Descripción:</label>
                <div class="col-xs-2">
                    <input type="text" class="form-control input-sm "  id="tf_descripcion" name="tf_descripcion" value="<?php echo $this->DatosProyecto[0]['descripcion']; ?>"/>
                </div>
                <br></br>
                <label for="tf_integrantes1" class="col-xs-2 control-label">Integrante 1:</label>
                <div class="col-xs-3">
                    
                    <input type="text" class="form-control input-sm "  id="tf_integrantes1" name="tf_integrantes1"  value="<?php echo $this->DatosIntegrante[0]['nombre']; ?>"/>
                </div> 
                <label for="tf_idIntegrantes1" class="col-xs-1 control-label">ID:</label>
                <div class="col-xs-1">
                    <input type="text" class="form-control input-sm "  id="tf_idIntegrantes1" name="tf_idIntegrantes1" value="<?php echo $this->DatosIntegrante[0]['id']; ?>" disabled=" "/>
                    <input type="hidden"   id="tf_idIntegrantes1" name="tf_idIntegrantes1" value='<?php echo $this->DatosIntegrante[0]['id']; ?>'/>

                </div>
                <br></br>
                <label for="tf_integrantes2" class="col-xs-2 control-label">Integrante 2:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm "  id="tf_integrantes2" name="tf_integrantes2" value="<?php echo $this->DatosIntegrante[1]['nombre']; ?>"/>
                </div>
                <label for="tf_idIntegrantes2" class="col-xs-1 control-label">ID:</label>
                <div class="col-xs-1">
                    <input type="text" class="form-control input-sm "  id="tf_idIntegrantes2" name="tf_idIntegrantes2" value="<?php echo $this->DatosIntegrante[1]['id']; ?>" disabled=" "/>
                    <input type="hidden"   id="tf_idIntegrantes2" name="tf_idIntegrantes2" value='<?php echo $this->DatosIntegrante[1]['id']; ?>'/>

                </div>
                <br></br>
                <label for="tf_integrantes3" class="col-xs-2 control-label">Integrante 3:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm "  id="tf_integrantes3" name="tf_integrantes3" value="<?php echo $this->DatosIntegrante[2]['nombre']; ?>"/>
                </div> 
                <label for="tf_idIntegrantes3" class="col-xs-1 control-label">ID:</label>
                <div class="col-xs-1">
                    <input type="text" class="form-control input-sm "  id="tf_idIntegrantes3" name="tf_idIntegrantes3" value="<?php echo $this->DatosIntegrante[2]['id']; ?>" disabled=" "/>
                    <input type="hidden"   id="tf_idIntegrantes3" name="tf_idIntegrantes3" value='<?php echo $this->DatosIntegrante[2]['id']; ?>'/>

                </div>
                <br></br>
                <label for="tf_integrantes4" class="col-xs-2 control-label">Integrante 4:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm "  id="tf_integrantes4" name="tf_integrantes4" value="<?php echo $this->DatosIntegrante[3]['nombre']; ?>"/>
                </div>
                <label for="tf_idIntegrantes4" class="col-xs-1 control-label">ID:</label>
                <div class="col-xs-1">
                    <input type="text" class="form-control input-sm "  id="tf_idIntegrantes4" name="tf_idIntegrantes4" value="<?php echo $this->DatosIntegrante[3]['id']; ?>" disabled=" "/>
                    <input type="hidden"   id="tf_idIntegrantes4" name="tf_idIntegrantes4" value='<?php echo $this->DatosIntegrante[3]['id']; ?>'/>

                </div>
                <br></br>
                <label for="tf_integranteLider" class="col-xs-2 control-label">Integrante lider:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control input-sm  validate[required]"  id="tf_integranteLider" name="tf_integranteLider" value="<?php echo $this->DatosIntegrante[4]['nombre']; ?>"/>
                </div>
                <label for="tf_idIntegranteLider" class="col-xs-1 control-label">ID:</label>
                <div class="col-xs-1">
                    <input type="text" class="form-control input-sm  validate[required]"  id="tf_idIntegranteLider" name="tf_idIntegranteLider" value="<?php echo $this->DatosIntegrante[4]['id']; ?>" disabled=" "/>
                    <input type="hidden"   id="tf_idIntegranteLider" name="tf_idIntegranteLider" value='<?php echo $this->DatosIntegrante[4]['id']; ?>'/>

                </div>
                <br></br>
                <label for="tf_categoria" class="col-xs-2 control-label ">Categoria:</label>
                <div class="col-xs-2">
                    <select class="form-control input-sm validate[required]" name="cmb_categoria" id="tf_categoria">
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