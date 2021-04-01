<?php

    require_once('../assets/funcoes.php');
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $pagina = file_get_contents('cadastro.html');
        if (isset($_GET['msg'])) {
            $pagina = str_replace('{msg}', '<div>'.$_GET['msg'].'</div>',$pagina);
        }else {
            $pagina = str_replace('{msg}', '', $pagina);
        }
        print($pagina);
    }elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['nome'] and $_POST['email'] and $_POST['senha'] and $_POST['confSenha']) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = strtolower($_POST['senha']);
            $confSenha = strtolower($_POST['confSenha']);

            if ($senha === $confSenha) {
                $sql = 'INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)';
                $stmt = preparaComando($sql);
                $bind = array(
                    ':nome' => $nome,
                    ':email' => $email,
                    ':senha' => $senha
                );
                $stmt = bindExecute($stmt, $bind);

                $msg = "Cadastro realizado!<br>".$nome." ".$email." ".$senha." ".$confSenha;
                header('location:home.php?msg='.$msg);
            }else {
                $msg = "As senhas não coincidem!";
                header('location:cadastro.php?msg='.$msg);
            }
        }else {
            $msg = "Preencha todos os campos!";
            header('location:cadastro.php?msg='.$msg);
        }
    }


?>