<!DOCTYPE html>
<?php
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=consulta',"root","");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e){
		echo "Erro: ".$e->getMessage();
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<center>
		<table border="1 px" style="text-align: center;">
			<tr><th>codigo</th><th>descricao</th><th>dataVenda</th><th>valorUnitario</th><th>quantidade</th><th>valorItem</th></tr>
			<?php
				$consulta = $pdo->query("SELECT *, valorUnitario * quantidade as valorItem  FROM consulta");
				$totalValorItem=0;
				$totalQuantidade=0;
				while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
					echo "<tr><td>{$linha['codigo']}</td><td>{$linha['descricao']}</td><td>{$linha['dataVenda']}</td><td>{$linha['valorUnitario']}</td><td>{$linha['quantidade']}</td><td>{$linha['valorItem']}</td></tr>";
					$totalValorItem+=$linha['valorItem'];
					$totalQuantidade+=$linha['quantidade'];

				}
				$consulta = $pdo->query("SELECT sum(valorUnitario * quantidade) as totalValorItem, sum(quantidade) as totalQuantidade  FROM consulta");
				$linha = $consulta->fetch(PDO::FETCH_ASSOC);
				echo "<tr><td></td><td></td><td></td><td></td><td>{$linha['totalQuantidade']}</td><td>{$linha['totalValorItem']}</td></tr>";
			?>
		</table>
	</center>
</body>
</html>
