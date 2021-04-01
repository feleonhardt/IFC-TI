<?php

  // include("Conexao.php");
  try {
    // $HOST = "localhost";
    // $BANCO = "u949930417_location";
    // $USUARIO = "u949930417_feleonhardt";
    // $SENHA = "bailarina03";

    $HOST = "localhost";
    $BANCO = "location";
    $USUARIO = "felipe";
    $SENHA = "bailarina0303";

    $PDO = new PDO("mysql:host=".$HOST.";dbname=".$BANCO.";charset=utf8", $USUARIO, $SENHA);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch (PDOException $erro) {
    echo "Erro de econexão, detalhes: ".$erro->getMessage();
    // echo "conexao_erro";
  }

  $id = $_GET['id'];
  $lng = $_GET['lng'];
  $lat = $_GET['lat'];
  $data = $_GET['data'];
  $placa = $_GET['placa'];
  $velocidade = $_GET['vel'];

  $sql = "INSERT INTO dados_novo (latitude, longitude, hora, velocidade, placa) VALUES (:latitude, :longitude, :hora, :velocidade, :placa)";

  $stmt = $PDO->prepare($sql);

  // $stmt->bindParam(':id', $id);
  $stmt->bindParam(':latitude', $lat);
  $stmt->bindParam(':longitude', $lng);
  $stmt->bindParam(':hora', $data);
  $stmt->bindParam(':placa', $placa);
  $stmt->bindParam(':velocidade', $velocidade);


  if ($lat != 0.000000 and $lng != 0.000000 and $data != 'null') {
    if ($stmt->execute()) {
      echo "salvo_com_sucesso";
    }else {
      echo "erro_ao_salvar";
    }
  }else {
    echo "erro_ao_salvar";
  }
  // ------- tirar do comentário para funcionar------


?>
