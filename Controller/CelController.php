<?php

require_once "View/CelView.php";
require_once "Model/CelModel.php";


class CelController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new CelModel();
        $this->view = new CelView();
    }

    function showCel(){
        $marca = $_GET['marca'];
        $celulares =$this->model->celporMarca($marca); //Guardo en $celulares, el arreglo que obtendo de la consulta sql
        $this->view->renderizarcel($marca, $celulares);
       
    }
    function showstock(){
        $celulares =$this->model->getstock(); //Guardo en $celulares, el arreglo que obtendo de la consulta sql
        $this->view->renderstock($celulares);

        

    }
}
