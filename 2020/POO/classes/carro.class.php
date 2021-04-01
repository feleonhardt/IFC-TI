<?php

class Carro{
// Atributos
    var $modelo;
    var $cor;
    var $ano;
    var $renavam;
    var $chassis;
    var $proprietario;
    var $cpfProprietario;

// Métodos

    function liga(){

        return true;
    }

    function desliga(){

        return false;
    }

    function movimenta(){
        echo "Andou";
    }

}


?>