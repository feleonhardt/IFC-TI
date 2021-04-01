<?php

class Registro{
    var $codigo;
    var $latitude;
    var $longitude;
    var $data;
    var $placa;

    function recebeDados($codigo, $latitude, $longitude, $data, $placa){
        echo $codigo." - ".$latitude." - ".$longitude." - ".$data." - ".$placa;
    }
}

?>