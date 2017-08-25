<?php

class Desgloce_puntos extends Controllers {

    function __construct() {
        parent::__construct();
          Auth::handleLogin();
         Auth::nivelDeSeguridad();
    }

    function agregarDesgloce_puntos() {
        $this->view->title = 'Desgloce Puntos';
        $this->view->render('header');
        $this->view->render('desgloce_puntos/agregarDesgloce_puntos');
        $this->view->render('footer');
    }

    function verDesgloce_puntos() {
        $this->view->title = 'Vista de Desgloce Puntos';
        $this->view->render('header');
        $this->view->ListaDesgloce_puntos = $this->model->ListaDesgloce_puntos();
        $this->view->render('desgloce_puntos/verDesgloce_puntos');
        $this->view->render('footer');
    }

    function guardarDesgloce_puntos() {
        $datos = array();
        /* echo 'Guardando Datos..';
          echo '<br>Nombre: '.$_POST['tf_name'].'</br>'; */
        $datos['tf_descripcion'] = $_POST['tf_descripcion'];
        $datos['tf_puntaje'] = $_POST['tf_puntaje'];
        $datos['tf_id'] = $_POST['tf_id'];


        $this->model->guardarDesgloce_puntos($datos);

        header("Location:" . URL . "desgloce_puntos/verDesgloce_puntos");
    }

    function actualizarDesgloce_puntos() {
        $datos = array();
        /* echo 'Guardando Datos..';
          echo '<br>Nombre: '.$_POST['tf_name'].'</br>'; */
        $datos['tf_descripcion'] = $_POST['tf_descripcion'];
        $datos['tf_puntaje'] = $_POST['tf_puntaje'];
        $datos['tf_id'] = $_POST['tf_id'];

        $this->model->actualizarDesgloce_puntos($datos);

        header("Location:" . URL . "desgloce_puntos/verDesgloce_puntos");
    }

    function editarDesgloce_puntos($id) {
        $this->view->title = 'Datos';
        $this->view->render('header');
        $this->view->datosDesgloce_puntos = $this->model->datosDesglocePuntos($id);
        $this->view->render('desgloce_puntos/editarDesgloce_puntos');
        $this->view->render('footer');
    }

    function eliminarDesgloce_puntos($id) {


        $this->view->title = 'Datos';
        $this->model->eliminarDesgloce_puntos($id);
        header("Location: " . URL . "desgloce_puntos/verDesgloce_puntos");
    }

    function run() {
        //llama a la funcion run() de login_model
        $this->model->run();
    }

}

?>
