<?php

Class Categoria_Model extends Models {

    public function __construct() {
        parent::__construct();
    }

    public function guardarCategoria($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaCategoria = $this->db->select("SELECT * FROM categorias "
                . "WHERE id = '" . $id . "' ");

        if ($consultaExistenciaCategoria != null) {
            //Si ya existe, realizare un update
            echo 'Error ya existe una categoria con el mismo nombre';
            die;
        } else {
            $tipoUsuario = 2;
            //Sino Inserto datos de Pre-Matricula del Estudiante
            $this->db->insert('categorias', array(
                'id' => $datos['tf_id'],
                'codigo' => $datos['tf_codigo'],
                'nombre' => $datos['tf_name']));
        }
    }

    public function ListaCategoria() {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaListaCategoria = $this->db->select("SELECT * FROM categorias ");
        return $consultaListaCategoria;
    }

    public function buscarEstuRatif($ced_estudiante) {
        $resultado = $this->db->select("SELECT * "
                . "FROM categorias "
                . "WHERE nombre LIKE '%" . $ced_estudiante . "%'");
        echo json_encode($resultado);
    }

    public function DatosCategoria($id) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaCategoria = $this->db->select("SELECT * FROM categorias "
                . "WHERE id = '" . $id . "' ");

        if ($consultaExistenciaCategoria != null) {
            //Si ya existe, realizare un update
            return $consultaExistenciaCategoria;
        } else {
            echo 'Categoria no Encontrada';
            die;
        }
    }

    public function actualizarCategoria($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaCategoria = $this->db->select("SELECT * FROM categorias "
                . "WHERE id = '" . $datos['tf_id'] . "' ");

        if ($consultaExistenciaCategoria != null) {
            //Si ya existe, realizare un update
            $posData = array(
                'id' => $datos['tf_id'],
                'codigo' => $datos['tf_codigo'],
                'nombre' => $datos['tf_name']);

            $this->db->update('categorias', $posData, "`id` = '{$datos['tf_id']}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Categoria no Encontrada';
            die;
        }
    }

    public function eliminarCategoria($id) {
        $consultaExistenciaCategoria = $this->db->select("SELECT * FROM categorias "
                . "WHERE id = '" . $id . "'");

        if ($consultaExistenciaCategoria != null) {
            $this->db->delete('categorias', "id = '" . $id . "'");
        } else {
            echo '<h1>No se encontro categoria en la BD</h1>';
            die;
        }
    }

    /*
      $consultaExistenciaEquipo = $this->db->select("SELECT * FROM persona "
      . "WHERE cedula = " .$datos['tf_id'] . " ");

      if ($consultaExistenciaJuez != null) {
      $this->db->delete('persona',$posData, "cedula= '{$datos['tf_id']}'");
      } else {
      echo '<h1>Lo sentimos no se encontró al usuario</h1>';
      die;
      } */
}

?>
