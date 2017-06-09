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
            echo 'Error ya existe un usuario con ese mismo nombre';
            die;
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            $this->db->insert('persona', array(
                'cedula' => $datos['tf_id'],
                'nombre' => $datos['tf_name'],
                'correo' => $datos['tf_email']));
        }
    }

    public function ListaJueces() {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaListaJuez = $this->db->select("SELECT * FROM persona ");
        return $consultaListaJuez;
    }

    public function DatosJuez($id) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaJuez = $this->db->select("SELECT * FROM persona "
                . "WHERE cedula = '" . $id . "' ");

        if ($consultaExistenciaJuez != null) {
            //Si ya existe, realizare un update
            return $consultaExistenciaJuez;
        } else {
            echo 'Usuario no Encontrado';
            die;
        }
    }

    public function editarJuez($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaJuez = $this->db->select("SELECT * FROM persona "
                . "WHERE cedula = '" . $datos['tf_id'] . "' ");

        if ($consultaExistenciaJuez != null) {
            //Si ya existe, realizare un update
            $posData = array(
                'cedula' => $datos['tf_id'],
                'nombre' => $datos['tf_name'],
                'correo' => $datos['tf_email']);

            $this->db->update('persona', $posData, "`cedula` = '{$datos['tf_id']}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Usuario no Encontrado';
            die;
        }
    }

}

?>
