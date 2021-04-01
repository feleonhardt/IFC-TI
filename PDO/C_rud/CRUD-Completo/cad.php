<!DOCTYPE html>
<?php
include_once "acao.php";
$acao = isset($_GET['acao']) ? $_GET['acao'] : "";
$dados;
if ($acao == 'editar'){
    $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : "";
    if ($codigo > 0)
        $dados = buscarDados($codigo);
}
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br>
<a href="index.php"><button>Listar</button></a>
<a href="cad.php"><button>Novo</button></a>
<br><br>
<form action="acao.php" method="post">
    cod: <input readonly  type="text" name="codigo" id="codigo" value="<?php if ($acao == "editar") echo $dados['codigo']; else echo 0; ?>"><br>
    desc: <input required=true   type="text" name="descricao" id="descricao" value="<?php if ($acao == "editar") echo $dados['descricao']; ?>"><br>
    val: <input required=true   type="text" name="valor" id="valor" value="<?php if ($acao == "editar") echo $dados['valor']; ?>"><br>
    qnt: <input required=true   type="number" name="quantidade" id="quantidade" value="<?php if ($acao == "editar") echo $dados['quantidade']; ?>"><br>
    <br><button type="submit" name="acao" id="acao" value="salvar">Salvar</button>
</form>
</body>
</html>