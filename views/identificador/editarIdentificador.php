<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Editar Identificador</h1>
    <form id="MyForm" action="<?php echo URL; ?>identificador/actualizarIdentificador" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Datos del identificador</legend>

            <!--L2 Nombre Estudiante (Formulario Hugo)-->

            <div class="form-group">


                <label for="tf_descripcion" class="col-xs-2 control-label">Descripción:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="tf_descripcion" name="tf_descripcion" value="<?php echo $this->datosIdentificador[0]['Descripcion']; ?>"/>
                </div>
                <br></br>
                <br></br>
                <label for="tf_puntaje" class="col-xs-2 control-label">Puntaje:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="tf_puntaje" name="tf_puntaje" value="<?php echo $this->datosIdentificador[0]['Puntos']; ?>"/>
                </div>
                <br></br>
                <br></br>
                <label for="tf_id" class="col-xs-2 control-label">Id:</label>
                <div class="col-xs-2">
                    <input type="text" class="text-uppercase form-control input-sm validate[required]"  id="tf_id" name="tf_id" value="<?php echo $this->datosIdentificador[0]['Id']; ?>" disabled=" "/>
                    <input type="hidden"   id="tf_id" name="tf_id" value='<?php echo $this->datosIdentificador[0]['Id']; ?>'/>
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