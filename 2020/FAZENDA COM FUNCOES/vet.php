<?php
    // var_dump([$_SERVER]);
    require_once('funcoes/funcoes.php');
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $formulario = file_get_contents('vet.html');
        if (isset($_GET['msg'])) {
            $formulario = str_replace('{msg}','<div class="alert alert-danger" role="alert">'.$_GET['msg'].'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>',$formulario);
        }else{
            $formulario = str_replace('{msg}','',$formulario);
        }
        if (isset($_GET['codigo'])) {
            
            $sql = 'SELECT * FROM veterinario where codigo = :codigo';
            
            $stmt = preparaComando($sql);
            if (!$stmt) {
                die("Erro ao criar comando. Erro: ".$stmt->erroInfo());
            }
            $bind = array(':codigo' => $_GET['codigo']);
            $stmt = bindExecute($stmt, $bind);
            $veterinario = $stmt->fetch();
            $formulario = preencherFormulario($formulario,$veterinario);
        }
        $formulario = str_replace('{nome}','',$formulario);
        $formulario = str_replace('{crmv}','',$formulario);
        $formulario = str_replace('{telefone}','',$formulario);
        $formulario = str_replace('{codigo}','',$formulario);
        $formulario = str_replace('{imagem}','',$formulario);
        print($formulario);
    }else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['nome'] and $_POST['crmv'] and $_POST['telefone']) {
            if ($_POST['codigo']>0) {
                if ($_FILES['imagem']['name']) { // SE TIVER NOVA IMAGEM
                    $codigo = $_POST['codigo'];
                    $nome = $_POST['nome'];
                    $crmv = $_POST['crmv'];
                    $telefone = $_POST['telefone'];
                    $formatos = array('png', 'jpeg', 'jpg', 'gif');
                    $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);   
                    if (in_array($extensao, $formatos)) {
                        $pasta = "upload/";
                        $nomeTemporario = $_FILES['imagem']['tmp_name'];
                        $novoNome = uniqid().".$extensao";
                        
                        if (move_uploaded_file($nomeTemporario, $pasta.$novoNome)) {
                            
                            $sql = 'SELECT * FROM veterinario where codigo = :codigo';
                            
                            $stmt = preparaComando($sql);
                            $bind = array(':codigo' => $codigo);
                            $stmt = bindExecute($stmt, $bind);
                            $veterinario = $stmt->fetch();
                            
                            unlink("upload/".$veterinario['imagem']);
                            
                            $sql = 'UPDATE veterinario set nome = :nome, imagem = :imagem, crmv = :crmv, telefone = :telefone where codigo = :codigo';
                            $stmt = preparaComando($sql);
                            $bind = array(
                                ':nome'=>$nome,
                                ':imagem'=>$novoNome,
                                ':crmv'=>$crmv,
                                ':telefone'=>$telefone,
                                ':codigo'=>$codigo
                            );
                            $stmt = bindExecute($stmt, $bind);
                            
                            $msg = "Cadastro alterado!";
                            header('location:vet_lista.php?msg='.$msg);
                            
                        }else {
                            $msg = "Existe um problema com esta imagem!";
                            header('location:vet.php?codigo='.$codigo.'&msg='.$msg);
                            
                        }
                    }else {
                        $msg = "Formato de arquivo inválido!";
                        header('location:vet.php?codigo='.$codigo.'&msg='.$msg);
                        
                    }
                    echo $msg;
                }else{ //SE NÃO TIVE NOVA IMAGEM
                    $codigo = $_POST['codigo'];
                    $nome = $_POST['nome'];
                    $crmv = $_POST['crmv'];
                    $telefone = $_POST['telefone'];
                    
                    $sql = 'UPDATE veterinario set nome = :nome, crmv = :crmv, telefone = :telefone where codigo = :codigo';
                    $stmt = preparaComando($sql);
                    
                    $bind = array(
                        ':nome'=>$nome,
                        ':crmv'=>$crmv,
                        ':telefone'=>$telefone,
                        ':codigo'=>$codigo
                    );
                    $stmt = bindExecute($stmt, $bind);
                    
                    $msg = "Cadastro alterado!";
                    header('location:vet_lista.php?msg='.$msg);
                }
            }else {
                $nome = $_POST['nome'];
                $crmv = $_POST['crmv'];
                $telefone = $_POST['telefone'];
                $formatos = array('png', 'jpeg', 'jpg', 'gif');
                $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
                
                if ($extensao) {
                    if (in_array($extensao, $formatos)) {
                        $pasta = "upload/";
                        $nomeTemporario = $_FILES['imagem']['tmp_name'];
                        $novoNome = uniqid().".$extensao";
                        
                        if (move_uploaded_file($nomeTemporario, $pasta.$novoNome)) {
                            
                            $sql = 'INSERT into veterinario (nome, imagem, crmv, telefone) values (:nome, :imagem, :crmv, :telefone)';
                            $stmt = preparaComando($sql);
                            $bind = array(
                                ':nome'=>$nome,
                                ':imagem'=>$novoNome,
                                ':crmv'=>$crmv,
                                ':telefone'=>$telefone
                            );
                            $stmt = bindExecute($stmt, $bind);            
                            $msg = "Cadastro realizado!";
                            header('location:vet_lista.php?msg='.$msg);
                            
                        }else {
                            $msg = "Existe um problema com esta imagem!";
                            header('location:vet.php?msg='.$msg);
                        }
                    }else {
                        $msg = "Formato de arquivo inválido!";
                        header('location:vet.php?msg='.$msg);
                    }
                }else {
                    $msg = "Adicione uma imagem!";
                    header('location:vet.php?msg='.$msg);
                }
                echo $msg;
            }
        }else{
            $msg = "Preencha todos os campos!";
            header('location:vet.php?msg='.$msg);
        }
    }

    ?>