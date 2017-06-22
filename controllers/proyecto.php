<?php

class Proyecto extends Controllers {

    function __construct() {
        parent::__construct();
    }

    function agregarProyecto() {
        $this->view->title = 'Iniciar sesión';
        $this->view->render('header');
        $this->view->render('proyecto/agregarProyecto');
        $this->view->render('footer');
    }

    function verProyecto() {
        $this->view->title = 'Vista de Proyectos';
        $this->view->render('header');
        $this->view->ListaJueces = $this->model->ListaJueces();
        $this->view->render('proyecto/verProyecto');
        $this->view->render('footer');
    }

    function guardarProyecto() {
        $datos = array();
        /* echo 'Guardando Datos..';
          echo '<br>Nombre: '.$_POST['tf_name'].'</br>'; */
        $datos['tf_name'] = $_POST['tf_name'];
        $datos['tf_id'] = $_POST['tf_id'];
        $datos['tf_email'] = $_POST['tf_email'];
        $this->model->guardarProyecto($datos);
        
        header("Location:" . URL . "proyecto/verProyecto");
    }
        function actualizarProyecto() {
        $datos = array();
        /* echo 'Guardando Datos..';
          echo '<br>Nombre: '.$_POST['tf_name'].'</br>'; */
        $datos['tf_name'] = $_POST['tf_name'];
        $datos['tf_id'] = $_POST['tf_id'];
        $datos['tf_email'] = $_POST['tf_email'];
        $this->model->actualizarProyecto($datos);
        
        header("Location:" . URL . "proyecto/verProyecto");
    }

    function editarProyecto($id) {
        $this->view->title = 'Datos';
        $this->view->render('header');
        $this->view->DatosProyecto = $this->model->DatosProyecto($id);
        $this->view->render('proyecto/editarProyecto');
        $this->view->render('footer');
    }
        function eliminarProyecto($id) {
            
            
        $this->view->title = 'Datos'; 
        $this->model->eliminarProyecto($id); 
        header("Location: " . URL . "proyecto/verProyecto"); 
}

            
            
            
            
   

 
    function run() {
        //llama a la funcion run() de login_model
        $this->model->run();
    }

}

?>
