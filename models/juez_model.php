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
            $tipoUsuario = 2;
            //Sino Inserto datos de Pre-Matricula del Estudiante
            $this->db->insert('persona', array(
                'cedula' => $datos['tf_id'],
                'nombre' => $datos['tf_name'],
                'empresa' => $datos['tf_empresa'],
                'cargo' => $datos['tf_cargo'],
                'numeroTelefonico' => $datos['tf_numeroTelefono'],
                'password' => Hash::create('md5', $_POST['tf_password'], HASH_PASSWORD_KEY),
                'tipoUsuario' => $tipoUsuario,
                'correo' => $datos['tf_email']));
        }
    }

    public function ListaJueces() {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaListaJuez = $this->db->select("SELECT * FROM persona " . "WHERE tipoUsuario = '" . 2 . "' ");
        return $consultaListaJuez;
    }

    public function buscarEstuRatif($ced_estudiante) {
        $resultado = $this->db->select("SELECT * "
                . "FROM persona "
                . "WHERE nombre LIKE '%" . $ced_estudiante . "%'");
        echo json_encode($resultado);
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

    public function actualizarJuez($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaJuez = $this->db->select("SELECT * FROM persona "
                . "WHERE cedula = '" . $datos['tf_id'] . "' ");

        if ($consultaExistenciaJuez != null) {
            //Si ya existe, realizare un update
            $posData = array(
                'cedula' => $datos['tf_id'],
                'nombre' => $datos['tf_name'],
                'empresa' => $datos['tf_empresa'],
                'cargo' => $datos['tf_cargo'],
                'numeroTelefonico' => $datos['tf_numeroTelefono'],
                'correo' => $datos['tf_email']);

            $this->db->update('persona', $posData, "`cedula` = '{$datos['tf_id']}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Usuario no Encontrado';
            die;
        }
    }

    public function eliminarJuez($id) {
        $consultaExistenciaJuez = $this->db->select("SELECT * FROM persona "
                . "WHERE cedula = '" . $id . "'");

        if ($consultaExistenciaJuez != null) {
            $this->db->delete('persona', "cedula = '" . $id . "'");
        } else {
            echo '<h1>No se encontro persona en la BD</h1>';
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
