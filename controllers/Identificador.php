<?php

class Identificador extends Controllers {

    function __construct() {
        parent::__construct();
    }

    function agregarIdentificador() {
        $this->view->title = 'Iniciar sesión';
        $this->view->render('header');
        $this->view->render('identificador/agregarIdentificador');
        $this->view->render('footer');
    }

    function verIdentificador() {
        $this->view->title = 'Vista de Identificador';
        $this->view->render('header');
        $this->view->ListaIdentificador = $this->model->listaIdentificador();
        $this->view->render('identificador/verIdentificador');
        $this->view->render('footer');
    }

    function guardarIdentificador() {
        $datos = array();
        /* echo 'Guardando Datos..';
          echo '<br>Nombre: '.$_POST['tf_name'].'</br>'; */
        $datos['tf_descripcion'] = $_POST['tf_descripcion'];
        $datos['tf_puntaje'] = $_POST['tf_puntaje'];
        $datos['tf_id'] = $_POST['tf_id'];


        $this->model->guardarIdentificador($datos);

        header("Location:" . URL . "identificador/verIdentificador");
    }

    function actualizarIdentificador() {
        $datos = array();
        /* echo 'Guardando Datos..';
          echo '<br>Nombre: '.$_POST['tf_name'].'</br>'; */
        $datos['tf_descripcion'] = $_POST['tf_descripcion'];
        $datos['tf_puntaje'] = $_POST['tf_puntaje'];
        $datos['tf_id'] = $_POST['tf_id'];

        $this->model->actualizarIdentificador($datos);

        header("Location:" . URL . "Identificador/verIdentificador");
    }

    function editarIdentificador($id) {
        $this->view->title = 'Datos';
        $this->view->render('header');
        $this->view->datosIdentificador = $this->model->datosIdentificador($id);
        $this->view->render('identificador/editarIdentificador');
        $this->view->render('footer');
    }

    function eliminarIdentificador($id) {


        $this->view->title = 'Datos';
        $this->model->eliminarIdentificador($id);
        header("Location: " . URL . "identificador/verIdentificador");
    }

    function run() {
        //llama a la funcion run() de login_model
        $this->model->run();
    }

}

?>
