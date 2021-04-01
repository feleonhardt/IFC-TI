<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexao
 *
 * @author Alan
 */
class Conexao extends PDO
{
    private static $instancia;
    
    public function Conexao($dsn, $username = "", $password = "")
    {
        // O construtro abaixo é o do PDO
        parent::__construct($dsn, $username, $password);
    }
 
    public static function getInstance()
    {
        // Se o a instancia não existe eu faço uma
        if(!isset( self::$instancia )){
            try {
                $bd = parse_ini_file('application/config/bd.ini');
                self::$instancia = new Conexao($bd['drive'] . ":host=".$bd['host'].";dbname=" . $bd['bancoDeDados'], $bd['usuario'], $bd['senha']);
            } catch ( Exception $e ) {
                echo 'Erro ao conectar: ' . $e->getMessage();
                exit ();
            }
        }
        // Se já existe instancia na memória eu retorno ela
        return self::$instancia;
    }
}

?>
