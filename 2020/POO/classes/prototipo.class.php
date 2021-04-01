<?php

class Prototipo{
    var $codigo;
    var $telefone;
    var $carro;

    function liga($estado){
        echo $estado;
    }
    function desliga($estado){
        echo $estado;
    }
    function leGPS(){
        return "Localização";
    }
    function verificaSinalRede(){
        return true;
    }
    function enviaDados($codigo, $latitude, $longitude, $data, $placa){
        return "Enviado: ".$codigo." - ".$latitude." - ".$longitude." - ".$data." - ".$placa;
    }
    function recebeDados($resposta){
        return "Recebido: ".$resposta;
    }
}

?>