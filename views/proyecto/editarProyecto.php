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
                    <input type="text" class="text-uppercase form-control input-sm"  id="tf_id" name="tf_id" value="<?php echo $this->DatosProyecto[0]['id']; ?>" disabled=" "/>
                    <input type="hidden"   id="tf_id" name="tf_id" value='<?php echo $this->DatosProyecto[0]['id']; ?>'/>

                </div>
                <br></br>
                <label for="tf_name" class="col-xs-2 control-label">Nombre del Proyecto:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="tf_name" name="tf_name" value="<?php echo $this->DatosProyecto[0]['nombre']; ?>"/>
                </div>
                <br></br>
                <label for="tf_descripcion" class="col-xs-2 control-label">Descripción:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="tf_descripcion" name="tf_descripcion" value="<?php echo $this->DatosProyecto[0]['descripcion']; ?>"/>
                </div>
                <br></br>
                <label for="tf_integrantes" class="col-xs-2 control-label">Integrantes:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="tf_integrantes" name="tf_integrantes" value="<?php echo $this->DatosProyecto[0]['integrantes']; ?>"/>
                </div> 
                <br></br>
                <label for="tf_categoria" class="col-xs-2 control-label">Categoria:</label>
                <div class="col-xs-2">
                    <SELECT class="form-control input-sm" NAME="cmb_categoria" SIZE=1 onChange="" value="<?php echo $this->DatosProyecto[0]['categoria']; ?>"/> 

                     <!-- 
                    if ($value['categoria'] == "ei") {
                        echo 'Expo-Ingenieria';
                    } elseif ($value['categoria'] == "se") {
                        echo 'Semillitas';
                    } elseif ($value['categoria'] == "ej") {
                        echo 'Expo-Joven';
                    } elseif ($value['categoria'] == "fc") {
                        echo 'Feria Cientifica';
                    }
                   -->
                    <OPTION value="se">Semillitas</OPTION>
                    <OPTION value="fc">Feria Cientifica</OPTION>
                    <OPTION value="ei">Expo-Ingeniería</OPTION>
                    <OPTION value="ej">Expo-Joven</OPTION> 
                    </SELECT> 
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