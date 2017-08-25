<?php

Class Proyecto_Cliente_Model extends Models {

    public function __construct() {
        parent::__construct();
    }

    public function guardarProyecto($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaProyecto = $this->db->select("SELECT * FROM proyecto "
                . "WHERE nombre = '" . $datos['tf_name'] . "' ");

        if ($consultaExistenciaProyecto != null) {
            //Si ya existe, realizare un update
            echo 'Error ya existe un usuario con ese mismo nombre';
            die;
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            $this->db->insert('proyecto', array(
                'nombre' => $datos['tf_name'],
                'descripcion' => $datos['tf_descripcion'],
                'integrantes' => $datos['tf_integrantes'],
                'categoria' => $datos['cmb_categoria']));
        }
    }

 

    public function ListaProyecto_Cliente() {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaListaProyecto = $this->db->select("SELECT * FROM proyecto ");
        return $consultaListaProyecto;
    }

    public function DatosProyecto($id) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaProyecto = $this->db->select("SELECT * FROM proyecto "
                . "WHERE id = '" . $id . "' ");

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
                . "WHERE id = '" . $datos['tf_id'] . "' ");

        if ($consultaExistenciaProyecto != null) {
            //Si ya existe, realizare un update
            $posData = array(
                'nombre' => $datos['tf_name'],
                'descripcion' => $datos['tf_descripcion'],
                'integrantes' => $datos['tf_integrantes'],
                'categoria' => $datos['cmb_categoria']);

            $this->db->update('proyecto', $posData, "`id` = '{$datos['tf_id']}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Usuario no Encontrado';
            die;
        }
    }

    public function eliminarProyecto($id) {
        $consultaExistenciaProyecto = $this->db->select("SELECT * FROM proyecto "
                . "WHERE id = '" . $id . "'");

        if ($consultaExistenciaProyecto != null) {
            $this->db->delete('proyecto', "id = '" . $id . "'");
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
