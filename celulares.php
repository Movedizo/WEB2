<?php
require_once "Controller/CelController.php";

if(!empty($_GET['marca'])){
    $marca =$_GET['marca'];
}   else{
    $marca = 'home';

}

$params = explode('/', $marca);

$celController = new CelController();


switch($params[0]){
    case 'stock':
    $celController-> showstock();
    break;
    case 'motorola'||'samsung'||'huawei'||'sony'||'apple'||'alcatel':
    $celController-> showCel($params[1]);
break;


}

