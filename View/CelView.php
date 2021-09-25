<?php
require_once 'libs\smarty-master\libs\Smarty.class.php';

class CelView{

    function renderizarcel($marca, $celulares){
        echo "Se muestran los equipos de la marca $marca";
        foreach($celulares as $cel){
            echo "<li> $cel->marca $cel->modelo $$cel->precio</li>";
            
        }
    }

    function renderstock($celulares){
        foreach($celulares as $cel){
            echo "<li> $cel->marca $cel->modelo $$cel->precio</li>";
    }
}}