<?php

class Categoria extends Controllers {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
        Auth::nivelDeSeguridad();
    }

    function agregarCategoria() {
        $this->view->title = 'Agregar Categoria';
        $this->view->render('header');
        $this->view->render('categorias/agregarCategoria');
        $this->view->render('footer');
    }

    function verCategoria() {
        $this->view->title = 'Vista de Categorias';
        $this->view->render('header');
        $this->view->ListaCategoria = $this->model->ListaCategoria();
        $this->view->render('categorias/verCategoria');
        $this->view->render('footer');
    }

    function guardarCategoria() {
        $datos = array();
        /* echo 'Guardando Datos..';
          echo '<br>Nombre: '.$_POST['tf_name'].'</br>'; */
        $datos['tf_name'] = $_POST['tf_name'];
        $datos['tf_id'] = $_POST['tf_id'];
        $this->model->guardarCategoria($datos);

        header("Location:" . URL . "categoria/verCategoria");
    }

    function actualizarCategoria() {
        $datos = array();
        /* echo 'Guardando Datos..';
          echo '<br>Nombre: '.$_POST['tf_name'].'</br>'; */
        $datos['tf_name'] = $_POST['tf_name'];
        $datos['tf_id'] = $_POST['tf_id'];
        $this->model->actualizarCategoria($datos);

        header("Location:" . URL . "categoria/verCategoria");
    }

    function editarCategoria($id) {
        $this->view->title = 'Datos';
        $this->view->render('header');
        $this->view->DatosCategoria = $this->model->DatosCategoria($id);
        $this->view->render('categorias/editarCategoria');
        $this->view->render('footer');
    }

    function eliminarCategoria($id) {
        $this->view->title = 'Datos';
        $this->model->eliminarCategoria($id);
        header("Location: " . URL . "categoria/verCategoria");
    }

    function run() {
        //llama a la funcion run() de login_model
        $this->model->run();
    }

}

?>
