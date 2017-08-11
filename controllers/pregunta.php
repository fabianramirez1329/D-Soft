<?php

class Pregunta extends Controllers {

    function __construct() {
        parent::__construct();
    }

    function agregarPregunta() {
        $this->view->title = 'Iniciar sesión';
        $this->view->render('header');
        $this->view->render('pregunta/agregarPregunta');
        $this->view->render('footer');
    }

    function verPregunta() {
        $this->view->title = 'Vista de Preguntas';
        $this->view->render('header');
        $this->view->ListaPregunta = $this->model->ListaPregunta();
        $this->view->render('pregunta/verPregunta');
        $this->view->render('footer');
    }

    function guardarPregunta() {
        $datos = array();
        /* echo 'Guardando Datos..';
          echo '<br>Nombre: '.$_POST['tf_name'].'</br>'; */
        $datos['cmb_categoria'] = $_POST['cmb_categoria'];
        $datos['tf_descripcion'] = $_POST['tf_descripcion'];
        $datos['tf_valorPregunta'] = $_POST['tf_valorPregunta'];
        $this->model->guardarPregunta($datos);

        header("Location:" . URL . "pregunta/verPregunta");
    }

    function actualizarPregunta() {
        $datos = array();
        /* echo 'Guardando Datos..';
          echo '<br>Nombre: '.$_POST['tf_name'].'</br>'; */
        $datos['cmb_categoria'] = $_POST['cmb_categoria'];
        $datos['tf_descripcion'] = $_POST['tf_descripcion'];
        $datos['tf_valorPregunta'] = $_POST['tf_valorPregunta'];
        $this->model->actualizarPregunta($datos);

        header("Location:" . URL . "pregunta/verPregunta");
    }

    function editarPregunta($id) {
        $this->view->title = 'Datos';
        $this->view->render('header');
        $this->view->datosPregunta = $this->model->datosPregunta($id);
        $this->view->render('pregunta/editaPregunta');
        $this->view->render('footer');
    }

    function eliminarPregunta($id) {


        $this->view->title = 'Datos';
        $this->model->eliminarJuez($id);
        header("Location: " . URL . "pregunta/verPregunta");
    }

    function run() {
        //llama a la funcion run() de login_model
        $this->model->run();
    }

}

?>
