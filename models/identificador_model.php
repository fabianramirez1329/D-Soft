<?php

Class Identificador_Model extends Models {

    public function __construct() {
        parent::__construct();
    }

    public function guardarIdentificador($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaIdentificador = $this->db->select("SELECT * FROM identificador "
                . "WHERE Id = '" . $datos['tf_id'] . "' ");

        if ($consultaExistenciaIdentificador != null) {
            //Si ya existe, realizare un update
            echo 'Error ya existe un mismo identificador con este id';
            die;
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante

            
            
                $this->db->insert('identificador', array(
                    
                    'Id' => $datos['tf_id'],
                    'titulo' => $datos['tf_nombre'],
                    'Descripcion' => $datos['tf_descripcion'],
                    'Puntos' => $datos['tf_puntaje']));
                   
                
            
        }
    }

    public function listaIdentificador() {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaListaIdentificador = $this->db->select("SELECT * FROM identificador ");
        return $consultaListaIdentificador;
    }

    public function datosIdentificador($id) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaIdentificador = $this->db->select("SELECT * FROM identificador "
                . "WHERE id = '" . $id . "' ");

        if ($consultaExistenciaIdentificador != null) {
            //Si ya existe, realizare un update
            return $consultaExistenciaIdentificador;
        } else {
            echo 'identificador no Encontrado';
            die;
        }
    }

    public function actualizarIdentificador($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPregunta = $this->db->select("SELECT * FROM identificador "
                . "WHERE id = '" . $datos['tf_id'] . "' ");

        if ($consultaExistenciaIdentificador != null) {
            //Si ya existe, realizare un update
            $posData = array(
                'id' => $datos['tf_id'],
                'descripcion' => $datos['tf_descripcion'],
                'categoria' => $datos['tf_categoria'],
                'valorPregunta' => $datos['tf_valorPregunta']);

            $this->db->update('preguntas', $posData, "`id` = '{$datos['tf_id']}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'identificador no Encontrado';
            die;
        }
    }

    public function eliminarIdentificador($id) {
        $consultaExistenciaPregunta = $this->db->select("SELECT * FROM identificador "
                . "WHERE id = '" . $id . "'");

        if ($consultaExistenciaIdentificador != null) {
            $this->db->delete('identificador', "id = '" . $id . "'");
        } else {
            echo '<h1>No se encontro el identificador en la BD</h1>';
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
