<?php

class Juez extends Controllers {

    function __construct() {
        parent::__construct();
        $this->view->js = array('juez/js/jsJuez.js');
        Auth::handleLogin();
        Auth::nivelDeSeguridad();
    }
    
     function buscarEstuRatif($ced_estudiante) {
        $this->model->buscarEstuRatif($ced_estudiante);
    }

    function agregarJuez() {
        $this->view->title = 'Iniciar sesión';
        $this->view->render('header');
        $this->view->render('juez/agregarJuez');
        $this->view->render('footer');
    }

    function verJuez() {
        $this->view->title = 'Vista de Jueces';
        $this->view->render('header');
        $this->view->ListaJueces = $this->model->ListaJueces();
        $this->view->render('juez/verJuez');
        $this->view->render('footer');
    }

    function guardarJuez() {
        $datos = array();
        /* echo 'Guardando Datos..';
          echo '<br>Nombre: '.$_POST['tf_name'].'</br>'; */
        $datos['tf_name'] = $_POST['tf_name'];
        $datos['tf_id'] = $_POST['tf_id'];
        $datos['tf_password'] = $_POST['tf_password'];
        $datos['tf_email'] = $_POST['tf_email'];
        $this->model->guardarJuez($datos);

        header("Location:" . URL . "juez/verJuez");
    }

    function actualizarJuez() {
        $datos = array();
        /* echo 'Guardando Datos..';
          echo '<br>Nombre: '.$_POST['tf_name'].'</br>'; */
        $datos['tf_name'] = $_POST['tf_name'];
        $datos['tf_id'] = $_POST['tf_id'];
        $datos['tf_email'] = $_POST['tf_email'];
        $this->model->actualizarJuez($datos);

        header("Location:" . URL . "juez/verJuez");
    }

    function editarJuez($id) {
        $this->view->title = 'Datos';
        $this->view->render('header');
        $this->view->DatosJuez = $this->model->DatosJuez($id);
        $this->view->render('juez/editarJuez');
        $this->view->render('footer');
    }

    function eliminarJuez($id) {


        $this->view->title = 'Datos';
        $this->model->eliminarJuez($id);
        header("Location: " . URL . "juez/verJuez");
    }

    function run() {
        //llama a la funcion run() de login_model
        $this->model->run();
    }

}

?>
