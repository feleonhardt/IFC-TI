<?php

class Gerenciador{
    var $codigo;
    var $nome;
    var $cpf;
    var $email;
    var $senha;
    var $endereço;

    function logIn($codigo, $senha){
        return $codigo." logado";
    }
    function logOut($codigo, $senha){
        return $codigo." deslogado";
    }
    function relacionaVeiculoPrototipo($placa, $codigo){
        return "Relacionado: ".$placa." - ".$codigo;
    }
    function solicitaAlteracaoCadastroVeiculoDetran($chassis, $alteracao){
        return "Solicitado: ".$chassis." - ".$alteracao;
    }
}

?>