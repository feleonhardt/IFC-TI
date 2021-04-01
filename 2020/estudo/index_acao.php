<?php
try {
    $HOST = "localhost";
    $BANCO = "publicacoes";
    $USUARIO = "root";
    $SENHA = "";

    $PDO = new PDO("mysql:host=".$HOST.";dbname=".$BANCO.";charset=utf8", $USUARIO, $SENHA);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch (PDOException $erro) {
    echo "Erro de econexão, detalhes: ".$erro->getMessage();
    // echo "conexao_erro";
  }
  
  if($_POST['acao']=="adicionar"){
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $data = isset($_POST['data']) ? $_POST['data'] : '';
    if($nome != '' and $data != ''){

      $sql = "INSERT into autores(nome , dataNasc) VALUES (:nome, :dataNasc);";
      
      $stmt = $PDO->prepare($sql);
      
      $stmt->bindParam(':nome', $nome);
      $stmt->bindParam(':dataNasc', $data);
      $stmt->execute();
    }
    header("location:index.php");
}elseif($_GET['acao']=="excluir"){
  $excluir = isset($_GET['excluir']) ? $_GET['excluir'] : null;
  // $tabela = isset($_GET['tabela']) ? $_GET['tabela'] : 'estados';
  if ($excluir != null) {
    $exclusao = $PDO->query("DELETE from autores where codAutor = {$excluir};");
    $exclusao->execute();
  }
  header('location:index.php');
}






?>