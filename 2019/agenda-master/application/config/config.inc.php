<?php
// Extenção da classes
define ('EXT', '.class.php');

// Inclusão da biblioteca Smarty
// Ele tem um autoload próprio e gera conflito com o criado por mim
include_once './system/libs/smarty/Smarty.class.php';

// Função para inserção de arquivos necessário por demanda
function __autoload ($class) {
    // Diretorios
    $dir = array (
        'system/libs/Smarty/',
        'system/libs/PDO/',
        'system/mvc/',
        'application/view/',
        'application/model/',
        'application/controller/'
    );
    // Percorre o vetor de diretorios
    foreach ($dir as $value) {
        // Verifica se a classe existe
        if (is_file($file = $value . $class . EXT)) {
            // Inclui a classe
            include_once $file;
        }
    }
}

// Registro da função __autoload para funcionar como autoload
spl_autoload_register('__autoload');
?>
