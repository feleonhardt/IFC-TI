<?php
    require_once('funcoes/funcoes.php');
    $sql = 'SELECT * FROM veterinario';
    $stmt = preparaComando($sql);
    $stmt = executaComando($stmt);
    $itens="";
    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $item = file_get_contents('vet_itens.html');
        $item = preencherFormulario($item,$linha);
        $itens .= $item;
    }
    $lista = file_get_contents('vet_lista.html');
    if (isset($_GET['msg'])) {
        $lista = str_replace('{msg}','<div class="alert alert-success" role="alert">'.
        $_GET['msg']
        .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>',$lista);
    }else{
        $lista = str_replace('{msg}','',$lista);
    }
    $lista = str_replace('{itens}',$itens,$lista);
    print($lista);
    ?>