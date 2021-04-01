<?php

class Usuario{
    var $nome;
    var $cpf;
    var $email;
    var $senha;

    function logIn($email, $senha){
        return $email." logado";
    }
    function logOut($email, $senha){
        return $email." deslogado";
    }
    function solicitaCadastro($nome, $cpf, $email){
        echo $nome." - ".$cpf." - ".$email;
    }
    function consultaMultas($cpf){
        return $cpf." - Multas: 0";
    }
}

?>