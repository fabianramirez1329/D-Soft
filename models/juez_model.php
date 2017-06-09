<?php

Class Juez_Model extends Models {

    public function __construct() {
        parent::__construct();
    }

    public function guardarJuez($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaJuez = $this->db->select("SELECT * FROM persona "
                . "WHERE cedula = '" . $datos['tf_id'] . "' ");

        if ($consultaExistenciaJuez != null) {
            //Si ya existe, realizare un update
            /* $posData = array(
              'nacionalidad' => $datos['tf_nacionalidad'],
              'cedula' => $datos['tf_cedulaEstudiante'],
              'apellido1' => $datos['tf_ape1'],
              'apellido2' => $datos['tf_ape2'],
              'nombre' => $datos['tf_nombre'],
              'sexo' => $datos['tf_genero'],
              'fechaNacimiento' => $datos['tf_fnacpersona'],
              'escuela_procedencia' => $datos['tf_primaria'],
              'domicilio' => $datos['tf_domicilio'],
              'idProvincia' => $datos['tf_provincias'],
              'IdCanton' => $datos['tf_cantones'],
              'IdDistrito' => $datos['tf_distritos']);

              $this->db->update('sipce_prematricula', $posData, "`cedula` = '{$datos['tf_cedulaEstudiante']}'"); */
            echo 'Error ya existe un usuario con ese mismo nombre';
            die;
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
             $this->db->insert('persona', array(
              'cedula' => $datos['tf_id'],
              'nombre' => $datos['tf_name'],
              'correo' => $datos['tf_email']));
             echo 'Ingresado con exito';
            die;
        }
    }

}

?>
