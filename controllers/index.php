<?php
class Index extends Controllers {
    function __construct(){
        parent::__construct();   
    }
    function index(){
        $this->view->title = 'D-Soft inc'; 
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }
}
?>
