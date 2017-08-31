<?php

class Administrador extends Controllers {

    function __construct() {
        parent::__construct();
         Auth::handleLogin();
         Auth::nivelDeSeguridad();
    }

    function agregarAdministrador() {
        $this->view->title = 'Iniciar sesión';
        $this->view->render('header');
        $this->view->render('administrador/agregarAdministrador');
        $this->view->render('footer');
    }

    function verAdministrador() {
        $this->view->title = 'Vista de Administradores';
        $this->view->render('header');
        $this->view->ListaAdministradores = $this->model->ListaAdministradores();
        $this->view->render('administrador/verAdministrador');
        $this->view->render('footer');
    }

    function guardarAdministrador() {
        $datos = array();
        /* echo 'Guardando Datos..';
          echo '<br>Nombre: '.$_POST['tf_name'].'</br>'; */
        $datos['tf_name'] = $_POST['tf_name'];
        $datos['tf_id'] = $_POST['tf_id'];
        $datos['tf_password'] = $_POST['tf_password'];
        $datos['tf_email'] = $_POST['tf_email'];
        $this->model->guardarAdministrador($datos);
        
        header("Location:" . URL . "administrador/verAdministrador");
    }
        function actualizarAdministrador() {
        $datos = array();
        /* echo 'Guardando Datos..';
          echo '<br>Nombre: '.$_POST['tf_name'].'</br>'; */
        $datos['tf_name'] = $_POST['tf_name'];
        $datos['tf_id'] = $_POST['tf_id'];
        $datos['tf_email'] = $_POST['tf_email'];
        $this->model->actualizarAdministrador($datos);
        
        header("Location:" . URL . "administrador/verAdministrador");
    }
    
   

    function editarAdministrador($id) {
        $this->view->title = 'Datos';
        $this->view->render('header');
        $this->view->DatosAdministrador = $this->model->DatosAdministrador($id);
        $this->view->render('administrador/editarAdministrador');
        $this->view->render('footer');
    }
        function eliminarAdministrador($id) {
            
            
        $this->view->title = 'Datos'; 
        $this->model->eliminarAdministrador($id); 
        header("Location: " . URL . "administrador/verAdministrador"); 
}

            
            
            
            
   

 
    function run() {
        //llama a la funcion run() de login_model
        $this->model->run();
    }

}

?>
