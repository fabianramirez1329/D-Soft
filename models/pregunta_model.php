<?php

Class Pregunta_Model extends Models {

    public function __construct() {
        parent::__construct();
    }

    public function guardarPregunta($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPregunta = $this->db->select("SELECT * FROM preguntas "
                . "WHERE id = '" . $id . "' ");

        if ($consultaExistenciaPregunta != null) {
            //Si ya existe, realizare un update
            echo 'Error ya existe una misma pregunta con este id';
            die;
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante



            $this->db->insert('preguntas', array(
                'descripcion' => $datos['tf_descripcion'],
                'codigo' => $datos['tf_categoria'],
                'categoria' => $datos['tf_categoria'],
                'idIdentificador' => $datos['tf_identificador'],
                'valorPregunta' => $datos['tf_valorPregunta']));
        }
    }

    public function listaPregunta() {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaListaPregunta = $this->db->select("SELECT * FROM preguntas ");
        return $consultaListaPregunta;
    }

    public function ListaIdentificador() {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaListaIdentificador = $this->db->select("SELECT * FROM identificador ");
        return $consultaListaIdentificador;
    }

    public function ListaCategoria() {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaListaCategoria = $this->db->select("SELECT * FROM categorias ");
        return $consultaListaCategoria;
    }

    public function consultaIdentificadores() {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaListaIdentificador = $this->db->select("SELECT * FROM identificador ");
        return $consultaListaIdentificador;
    }

    public function consultaCategorias() {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaListaCategoria = $this->db->select("SELECT * FROM categorias ");
        return $consultaListaCategoria;
    }

    public function datosPregunta($id) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPregunta = $this->db->select("SELECT * FROM preguntas "
                . "WHERE id = '" . $id . "' ");

        if ($consultaExistenciaPregunta != null) {
            //Si ya existe, realizare un update
            return $consultaExistenciaPregunta;
        } else {
            echo 'Pregunta no Encontrada';
            die;
        }
    }

    public function actualizarPregunta($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPregunta = $this->db->select("SELECT * FROM preguntas "
                . "WHERE id = '" . $datos['tf_id'] . "' ");

        if ($consultaExistenciaPregunta != null) {
            //Si ya existe, realizare un update
            $posData = array(
                'descripcion' => $datos['tf_descripcion'],
                'codigo' => $datos['tf_categoria'],
                'categoria' => $datos['tf_categoria'],
                'idIdentificador' => $datos['tf_identificador'],
                'valorPregunta' => $datos['tf_valorP']);
            $this->db->update('preguntas', $posData, "`id` = '{$datos['tf_id']}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Pregunta no Encontrada';
            die;
        }
    }

    public function eliminarPregunta($id) {
        $consultaExistenciaPregunta = $this->db->select("SELECT * FROM preguntas "
                . "WHERE id = '" . $id . "'");

        if ($consultaExistenciaPregunta != null) {
            $this->db->delete('preguntas', "id = '" . $id . "'");
        } else {
            echo '<h1>No se encontro la pregunta en la BD</h1>';
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
