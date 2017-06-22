<?php

Class Proyecto_Model extends Models {

    public function __construct() {
        parent::__construct();
    }

    public function guardarProyecto($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaProyecto = $this->db->select("SELECT * FROM proyecto "
                . "WHERE cedula = '" . $datos['tf_id'] . "' ");

        if ($consultaExistenciaProyecto != null) {
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
        $consultaListaProyecto = $this->db->select("SELECT * FROM proyecto ");
        return $consultaListaProyecto;
    }

    public function DatosProyecto($id) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaProyecto = $this->db->select("SELECT * FROM proyecto "
                . "WHERE cedula = '" . $id . "' ");

        if ($consultaExistenciaProyecto != null) {
            //Si ya existe, realizare un update
            return $consultaExistenciaProyecto;
        } else {
            echo 'Usuario no Encontrado';
            die;
        }
    }

    public function actualizarProyecto($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaProyecto = $this->db->select("SELECT * FROM proyecto "
                . "WHERE cedula = '" . $datos['tf_id'] . "' ");

        if ($consultaExistenciaProyecto != null) {
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

    public function eliminarProyecto($id) {
        $consultaExistenciaProyecto = $this->db->select("SELECT * FROM proyecto "
                . "WHERE cedula = '" . $id . "'");

        if ($consultaExistenciaProyecto != null) {
            $this->db->delete('persona', "cedula = '" . $id . "'");
        } else {
            echo '<h1>No se encontro persona en la BD</h1>';
            die;
        }
    }

    /*
      $consultaExistenciaEquipo = $this->db->select("SELECT * FROM proyecto "
      . "WHERE cedula = " .$datos['tf_id'] . " ");

      if ($consultaExistenciaProyecto != null) {
      $this->db->delete('persona',$posData, "cedula= '{$datos['tf_id']}'");
      } else {
      echo '<h1>Lo sentimos no se encontró al usuario</h1>';
      die;
      } */
}

?>
