<?php

class Detran{
    var $codigo;
    var $nome;
    var $senha;
    var $telefone;
    var $endereço;

    function logIn($codigo, $senha){
        return $codigo." logado";
    }
    function logOut($codigo, $senha){
        return $codigo." deslogado";
    }
    function cadastraGerenciador($codigo, $email){
        return "Gerenciador cadastrado: ".$email;
    }
    function cadastraVeiculo($modelo, $cor, $ano, $renavam, $chassis, $proprietario, $cpfProprietario){
        return "Veiculo cadastrado: ".$chassis;
    }
    function cadastraPrototipo($codigo, $telefone){
        return "Protótipo cadastrado: ".$codigo;
    }
    function emiteMulta($codigo, $latitude, $longitude, $data, $placa){
        return "Multa ".$placa;
    }
    function alteraCadastroVeiculo($chassis, $alteracao){
        return "Alterado: ".$chassis." - ".$alteracao;
    }
    function avaliaCadastroUsuario($nome, $cpf, $email){
        return "Aprovado: ".$cpf;
    }
}

?>