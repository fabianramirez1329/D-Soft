<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Editar Pregunta</h1>
    <form id="MyForm" action="<?php echo URL; ?>pregunta/actualizarPregunta" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Datos de la Pregunta</legend>

            <!--L2 Nombre Estudiante (Formulario Hugo)-->

            <div class="form-group">

                <label for="tf_id" class="col-xs-2 control-label">ID:</label>

                <div class="col-xs-2">

                    <input type="text" class="text-uppercase form-control input-sm"  id="tf_id" name="tf_id" value="<?php echo $this->datosPregunta[0]['id']; ?>" disabled=" "/>
                    <input type="hidden"   id="tf_id" name="tf_id" value='<?php echo $this->datosPregunta[0]['id']; ?>'/>
                </div>
                <br></br> 
                <label for="tf_codigo" class="col-xs-2 control-label">Código:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="tf_codigo" name="tf_codigo" value="<?php echo $this->datosPregunta[0]['codigo']; ?>"/>
                </div>
                <br></br>
              <label for="tf_descripcion" class="col-xs-2 control-label">Descripción:</label>
              <div class="col-xs-2">
                  <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="tf_descripcion" name="tf_descripcion" value="<?php echo $this->datosPregunta[0]['descripcion']; ?>"/>
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
                <!--<label for="tf_categoria" class="col-xs-2 control-label">Categoria:</label>
              
                 <div class="col-xs-2">
                     
                     <SELECT NAME="cmb_categoria" SIZE=1 onChange="" 
                         <OPTION value="se">Semillitas</OPTION>
                         <OPTION value="fc">Feria Cientifica</OPTION>
                         <OPTION value="ei">Expo-Ingeniería</OPTION>
                         <OPTION value="ej">Expo-Joven</OPTION> 
                     </SELECT> 
                 </div> -->

                <br></br>
                <label for="tf_valorP" class="col-xs-2 control-label">Valor de Pregunta:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="tf_valorP" name="tf_valorP" value="<?php echo $this->datosPregunta[0]['valorPregunta']; ?>"/>
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