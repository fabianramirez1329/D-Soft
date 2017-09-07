<?php

Class Proyecto_Model extends Models {

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

            //Fecha
            $fechaActual = getdate();
            $anioActual = $fechaActual['year'];
            //Sino Inserto datos de Pre-Matricula del Estudiante
            $this->db->insert('proyecto', array(
                'nombre' => $datos['tf_name'],
                'descripcion' => $datos['tf_descripcion'],
                'categoria' => $datos['cmb_categoria']));

            //id del proyecto
            $idProyecto = $this->db->lastInsertId();
            $Miembro = "Miembro";
            $Lider = "Lider";
            //4 veces
            if ($datos['tf_integrantes1'] != "") {
                $this->db->insert('integrantes', array(
                    'nombre' => $datos['tf_integrantes1'],
                    'tipoMiembro' => $Miembro,
                    'idProyecto' => $idProyecto));
            }
            if ($datos['tf_integrantes2'] != "") {
                $this->db->insert('integrantes', array(
                    'nombre' => $datos['tf_integrantes2'],
                    'tipoMiembro' => $Miembro,
                    'idProyecto' => $idProyecto));
            }
            if ($datos['tf_integrantes3'] != "") {
                $this->db->insert('integrantes', array(
                    'nombre' => $datos['tf_integrantes3'],
                    'tipoMiembro' => $Miembro,
                    'idProyecto' => $idProyecto));
            } if ($datos['tf_integrantes4'] != "") {
                $this->db->insert('integrantes', array(
                    'nombre' => $datos['tf_integrantes4'],
                    'tipoMiembro' => $Miembro,
                    'idProyecto' => $idProyecto));
            } if ($datos['tf_integranteLider'] != "") {
                $this->db->insert('integrantes', array(
                    'nombre' => $datos['tf_integranteLider'],
                    'tipoMiembro' => $Lider,
                    'idProyecto' => $idProyecto));
            }
        }
    }

    public function ListaPregunta() {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaListaPregunta = $this->db->select("SELECT * FROM preguntas ");
        return $consultaListaPregunta;
    }

    public function listaIdentificador() {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaListaIdentificador = $this->db->select("SELECT * FROM identificador ");
        return $consultaListaIdentificador;
    }

    public function listaIntegrante() {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaListaIdentificador = $this->db->select("SELECT * FROM integrantes ");
        return $consultaListaIdentificador;
    }

    public function ListaProyecto() {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaListaProyecto = $this->db->select("SELECT * FROM proyecto ");
        return $consultaListaProyecto;
    }

    public function consultaCategorias() {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaListaCategoria = $this->db->select("SELECT * FROM categorias ");
        return $consultaListaCategoria;
    }

    public function ListaCategorias() {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaListaCategoria = $this->db->select("SELECT * FROM categorias ");
        return $consultaListaCategoria;
    }

    public function ListaProyecto_Cliente() {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaListaProyecto = $this->db->select("SELECT * FROM proyecto ");
        return $consultaListaProyecto;
    }

    public function buscarEstuRatif($ced_estudiante) {
        $resultado = $this->db->select("SELECT * "
                . "FROM proyecto "
                . "WHERE nombre LIKE '%" . $ced_estudiante . "%'");
        echo json_encode($resultado);
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

    public function DatosIntegrante($id) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaProyecto = $this->db->select("SELECT * FROM integrantes "
                . "WHERE idProyecto = '" . $id . "' ");

        if ($consultaExistenciaProyecto != null) {
            //Si ya existe, realizare un update
            return $consultaExistenciaProyecto;
        } else {
            echo 'El usuario no ha sido encontrado';
            die;
        }
    }

    ////////
    ///////
    //////
    /////
    ////
    ///
    //
    public function DatosIntegrantes($id) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaProyecto = $this->db->select("SELECT * FROM integrantes "
                . "WHERE id = '" . $id . "' ");

        if ($consultaExistenciaProyecto != null) {
            //Si ya existe, realizare un update
            return $consultaExistenciaProyecto;
        } else {
            echo 'Usuario no Encontrado';
            die;
        }
    }

    public function actualizarProyecto($datos, $datosIntegrantes) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaProyecto = $this->db->select("SELECT * FROM proyecto "
                . "WHERE id = '" . $datos['tf_id'] . "' ");

        if ($consultaExistenciaProyecto != null) {
            //Si ya existe, realizare un update
            $posData = array(
                'nombre' => $datos['tf_name'],
                'descripcion' => $datos['tf_descripcion'],
                'categoria' => $datos['cmb_categoria']);



            $this->db->update('proyecto', $posData, "`id` = '{$datos['tf_id']}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Usuario no Encontrado';
            die;
        }

        $consultaExistenciaIntegrante = $this->db->select("SELECT * FROM integrantes "
                . "WHERE id = '" . $datosIntegrantes['tf_idIntegrantes1'] . "' ");

        if ($consultaExistenciaIntegrante != null) {

            // if($datosIntegrantes['tf_integrantes1'] != ""){
            $posDataIntegrante = array(
                'nombre' => $datosIntegrantes['tf_integrantes1']);
            if ($posDataIntegrante['nombre'] != "") {
                $this->db->update('integrantes', $posDataIntegrante, "`id` = '{$datosIntegrantes['tf_idIntegrantes1']}'");
            } else {
                $value = 1;
                $posDataIntegrantes = array(
                    'Condicion' => $value);
                $this->db->update('integrantes', $posDataIntegrantes, "`id` = '{$datosIntegrantes['tf_idIntegrantes1']}'");
            }

            //}
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Usuario no Encontrado';
            die;
        }
        if ($consultaExistenciaIntegrante != null) {
            $posDataIntegrante = array(
                'nombre' => $datosIntegrantes['tf_integrantes2']);
            $this->db->update('integrantes', $posDataIntegrante, "`id` = '{$datosIntegrantes['tf_idIntegrantes2']}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Usuario no Encontrado';
            die;
        }
        if ($consultaExistenciaIntegrante != null) {
            $posDataIntegrante = array(
                'nombre' => $datosIntegrantes['tf_integrantes3']);
            $this->db->update('integrantes', $posDataIntegrante, "`id` = '{$datosIntegrantes['tf_idIntegrantes3']}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Usuario no Encontrado';
            die;
        }
        if ($consultaExistenciaIntegrante != null) {
            $posDataIntegrante = array(
                'nombre' => $datosIntegrantes['tf_integrantes4']);
            $this->db->update('integrantes', $posDataIntegrante, "`id` = '{$datosIntegrantes['tf_idIntegrantes4']}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Usuario no Encontrado';
            die;
        }
        if ($consultaExistenciaIntegrante != null) {
            $posDataIntegrante = array(
                'nombre' => $datosIntegrantes['tf_integranteLider']);
            $this->db->update('integrantes', $posDataIntegrante, "`id` = '{$datosIntegrantes['tf_idIntegranteLider']}'");
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
