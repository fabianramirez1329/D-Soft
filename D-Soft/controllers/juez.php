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
        echo 'Guardando Datos..';
        echo '<br>Nombre: '.$_POST['tf_name'].'</br>';
    }
    
    function run(){
        //llama a la funcion run() de login_model
        $this->model->run();
    }
}
?>
