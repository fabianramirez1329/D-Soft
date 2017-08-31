<?php

class Proyecto_Cliente extends Controllers {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }

    function verProyecto_Cliente() {
        $this->view->title = 'Vista de Proyectos';
        $this->view->render('header');
        $this->view->ListaProyecto_Cliente = $this->model->ListaProyecto_Cliente();
        $this->view->render('proyecto/verProyecto_Cliente');
        $this->view->render('footer');
    }

    function calificarProyecto() {
        $this->view->title = 'Vista de Proyectos';
        $this->view->render('header');
        $this->view->ListaProyecto_Cliente = $this->model->ListaProyecto_Cliente();
        $this->view->ListaPregunta = $this->model->ListaPregunta();
        $this->view->ListaIdentificador = $this->model->listaIdentificador();
        $this->view->render('proyecto/calificarProyecto');
        $this->view->render('footer');
    }

    function run() {
        //llama a la funcion run() de login_model
        $this->model->run();
    }

}
