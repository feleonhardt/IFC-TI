<?php
require_once('funcoes/funcoes.php');
if (isset($_GET['codigo']) and isset($_GET['imagem'])) {
    if (unlink("upload/".$_GET['imagem'])) {
        $sql = "DELETE from veterinario where codigo = :codigo;";
        $stmt = preparaComando($sql);
        if (!$stmt) {
            die("Erro ao criar comando. Erro: ".$stmt->erroInfo());
        }
        $bind = array(
            ':codigo'=>$_GET['codigo']
        );
        $stmt = bindExecute($stmt, $bind);
        $msg = "Cadastro excluído!";
        header('location:vet_lista.php?msg='.$msg);
    }else{
        $msg = "Não foi possível excluir o cadastro!";
        header('location:vet_perfil.php?codigo='.$_GET['codigo'].'&msg='.$msg);
    }
}elseif (isset($_GET['codigo'])) {
    $formulario = file_get_contents('vet_perfil.html');
    if (isset($_GET['msg'])) {
        $formulario = str_replace('{msg}','<div class="alert alert-danger" role="alert">'.
        $_GET['msg']
        .'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>',$formulario);
    }else{
        $formulario = str_replace('{msg}','',$formulario);
    }
            $sql = 'SELECT * FROM veterinario where codigo = :codigo';
            
            $stmt = preparaComando($sql);
            $bind = array(':codigo' => $_GET['codigo']);
            $stmt = bindExecute($stmt, $bind);
            $veterinario = $stmt->fetch();
            $formulario = preencherFormulario($formulario,$veterinario);
            print($formulario);
        }else {
            header("location:vet_lista.php");
        }
        // $formulario = str_replace('{nome}','',$formulario);
        // $formulario = str_replace('{crmv}','',$formulario);
        // $formulario = str_replace('{telefone}','',$formulario);
        // $formulario = str_replace('{codigo}','',$formulario);
        
        
        ?>