<?php
class Juez extends Controllers {
    function __construct(){
        parent::__construct();
    }
    function agregarJuez(){
        $this->view->title = 'Iniciar sesión'; 
        $this->view->render('header');
        $this->view->render('juez/agregarJuez');
        $this->view->render('footer');
        
    }
    
      function guardarJuez(){
        $datos = array();
        /*echo 'Guardando Datos..';
        echo '<br>Nombre: '.$_POST['tf_name'].'</br>';*/
        $datos['tf_name'] = $_POST['tf_name'];
        $datos['tf_id'] = $_POST['tf_id'];
        $datos['tf_email'] = $_POST['tf_email'];
        $this->model->guardarJuez($datos);
    }
    
    function run(){
        //llama a la funcion run() de login_model
        $this->model->run();
    }
}
?>
