<?php

Class Administrador_Model extends Models {

    public function __construct() {
        parent::__construct();
    }

    public function guardarAdministrador($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaAdministrador = $this->db->select("SELECT * FROM persona "
                . "WHERE cedula = '" . $datos['tf_id'] . "' ");

        if ($consultaExistenciaAdministrador != null) {
            //Si ya existe, realizare un update
            echo 'Error ya existe un usuario con ese mismo nombre';
            die;
        } else {
            $tipoUsuario=1;
            //Sino Inserto datos de Pre-Matricula del Estudiante
            $this->db->insert('persona', array(
                'cedula' => $datos['tf_id'],
                'nombre' => $datos['tf_name'],
                'password' => Hash::create('md5', $_POST['tf_password'],HASH_PASSWORD_KEY),
                'tipoUsuario' => $tipoUsuario,
                'correo' => $datos['tf_email']));
        }
    }

    public function ListaAdministradores() {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        
        $consultaListaAdministrador = $this->db->select("SELECT * FROM persona " . "WHERE tipoUsuario = '" . 1 . "' ");
        return $consultaListaAdministrador;
        
        
        
    }

    public function DatosAdministrador($id) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaAdministrador = $this->db->select("SELECT * FROM persona "
                . "WHERE cedula = '" . $id . "' ");

        if ($consultaExistenciaAdministrador != null) {
            //Si ya existe, realizare un update
            return $consultaExistenciaAdministrador;
        } else {
            echo 'Usuario no Encontrado';
            die;
        }
    }

    public function actualizarAdministrador($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaAdministrador = $this->db->select("SELECT * FROM persona "
                . "WHERE cedula = '" . $datos['tf_id'] . "' ");

        if ($consultaExistenciaAdministrador != null) {
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

    public function eliminarAdministrador($id) {
        $consultaExistenciaAdministrador = $this->db->select("SELECT * FROM persona "
                . "WHERE cedula = '" . $id . "'");

        if ($consultaExistenciaAdministrador != null) {
            $this->db->delete('persona', "cedula = '" . $id . "'");
        } else {
            echo '<h1>No se encontro persona en la BD</h1>';
            die;
        }
    }

    /*
      $consultaExistenciaEquipo = $this->db->select("SELECT * FROM persona "
      . "WHERE cedula = " .$datos['tf_id'] . " ");

      if ($consultaExistenciaAdministrador != null) {
      $this->db->delete('persona',$posData, "cedula= '{$datos['tf_id']}'");
      } else {
      echo '<h1>Lo sentimos no se encontró al usuario</h1>';
      die;
      } */
}

?>
