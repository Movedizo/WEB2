<?php
class CelModel
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_tpe;charset=utf8', 'root', '');
    }

    public function getStock() //Obtiene todo los equipos en stock
    {
        $sentencia = $this->db->prepare("SELECT * FROM reacondicionados");
        $sentencia->execute();
        $stock =$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $stock;
        echo $stock;
    }

    public function celporMarca($marca)
    {
        $sentencia = $this->db->prepare("SELECT * FROM reacondicionados WHERE marca =?");
        $sentencia->execute([$marca]);
        $arraymarca = $sentencia->fetchAll((PDO::FETCH_OBJ));
        return $arraymarca;
    }
}
