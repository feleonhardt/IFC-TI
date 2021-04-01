<!DOCTYPE html>
<?php
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=consulta',"root","");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e){
		echo "Erro: ".$e->getMessage();
	}
	$busca = isset($_POST['busca']) ? $_POST['busca'] : null;
	$escolha = isset($_POST['escolha']) ? $_POST['escolha'] : null;
	$limpa = isset($_POST['limpa']) ? $_POST['limpa'] : null;
	if ($limpa=='ok') {
		$busca = null;
		$escolha = null;
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<center>
		<form action="" method="post">
			Buscar por: <br>
			<input type="radio" name="escolha" value="COD" <?php if ($escolha=='COD') echo "checked"; ?> > Código (=) | <input type="radio" name="escolha" value="DES" <?php if ($escolha=='DES') echo "checked"; ?> > Descrição (like) | <input type="radio" name="escolha" value="VAL" <?php if ($escolha=='VAL') echo "checked"; ?> > Valor unitário (>=) <br><br>
			Digite a busca: <input type="text" name="busca" value="<?php if ($busca!=null) echo $busca; ?>" ><br><br>
			<button type="submit" name="acao">BUSCAR</button>
			<button type="submit" name="limpa" value="ok">LIMPAR</button><br><br>
		</form>

		<?php
		if ($busca != null and $escolha != null) {
			if ($escolha == 'COD') {
				$consulta = $pdo->query("SELECT *, valorUnitario * quantidade as valorItem FROM consulta WHERE codigo = ".$busca.";");
				escreveTabela($consulta);
			}else if ($escolha == 'DES') {
				$consulta = $pdo->query("SELECT *, valorUnitario * quantidade as valorItem FROM consulta WHERE descricao like '".$busca."%';");
				escreveTabela($consulta);
			}if ($escolha == 'VAL') {
				$consulta = $pdo->query("SELECT *, valorUnitario * quantidade as valorItem FROM consulta WHERE valorUnitario >= ".$busca.";");
				escreveTabela($consulta);
			}
		}else if ($busca == null and $escolha == null) {
			$consulta = $pdo->query("SELECT *, valorUnitario * quantidade as valorItem FROM consulta;");
				escreveTabela($consulta);
		}else{
			echo "<h4>COMPLETE SUA BUSCA!</h4>";
		}
    function escreveTabela($consulta){
      echo "<table border='1 px solid'>";
      echo "<tr style='text-align: center;'><th style='text-align: center;'>Código</th><th>Descrição</th><th style='text-align: center;'>Data da Venda</th><th style='text-align: left;'>Valor Unitário</th><th style='text-align: center;'>Quantidade</th><th style='text-align: left;'>Valor Item</th></tr>";
      $vetValorItem=array();
      $vetQuantidade=array();
      $cont=0;
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr style='background-color: ";
        if (($cont%2)==0) {
          echo "#ccc";
        }else{
          echo "#fff";
        }
        $vetData=explode('-', $linha['dataVenda']);
        $dataTela = $vetData[2]."/".$vetData[1]."/".$vetData[0];
        $valorUnitarioTela=number_format($linha['valorUnitario'],2,',','.');
        $valorItemTela=number_format($linha['valorItem'],2,',','.');
        echo ";'><td style='text-align: center;'>{$linha['codigo']}</td><td>{$linha['descricao']}</td><td style='text-align: center;'>".$dataTela."</td><td style='text-align: right;'>".$valorUnitarioTela."</td><td style='text-align: center;'>{$linha['quantidade']}</td><td style='text-align: right;'>".$valorItemTela."</td></tr>";
        $vetValorItem[]=$linha['valorItem'];
        $vetQuantidade[]=$linha['quantidade'];
        $cont++;
      }
      $totalQuantidade=0;
      for ($i=0; $i < count($vetQuantidade) ; $i++) {
        $totalQuantidade+=$vetQuantidade[$i];
      }
      $totalValorItem=0;
      for ($i=0; $i < count($vetValorItem) ; $i++) {
        $totalValorItem+=$vetValorItem[$i];
      }
      $totalValorItemTela=number_format($totalValorItem,2,',','.');
      echo "<tr><td></td><td></td><td></td><td></td><td style='background-color: rgba(255,0,0,0.2); text-align: center'>".$totalQuantidade."</td><td style='background-color: rgba(255,0,0,0.2); text-align: right;'>".$totalValorItemTela."</td></tr>";
      echo "</table>";
    }
		?>
	</center>
</body>
</html>
