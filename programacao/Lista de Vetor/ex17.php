<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css"/>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <meta charset="UTF-8"/>
    <title>Vetor</title>
</head>
<style>
	#box{
		height:2800px;
	}
</style>
<?php
	for ($i = 0; $i < 10; $i++) {
		$valorUni[$i] = isset($_POST['valorUni'.$i])?$_POST['valorUni'.$i]:1;
		$quantidade[$i] = isset($_POST['quantidade'.$i])?$_POST['quantidade'.$i]:2;
	}
?>
<body>
	<div id="box">
	<form action="" method="post">
		<br><br>
		<fieldset>
			<legend>Exercicio 17</legend>
				<?php 
					$x = 1;
					for ($i = 0; $i < 10; $i++) {
						echo "<b>Produto ".$x."<br></b>";
						echo "<label>Valor unitário: </label>";
                		echo "<input type='number' name='valorUni".$i."' step='0.001' required value='".$valorUni[$i]."'/><br>";
                		echo "<label>Quantidade vendida: </label>";
                		echo "<input type='number' name='quantidade".$i."' step='0.001' required value='".$quantidade[$i]."'/><br><br>";
                		$x++;
					}
				?>
				<br><input type="submit" value="Calcular"><br><br>
				<?php 
					$valorGeral = 0;
					for ($i = 0; $i < 10; $i++){
						$valorTotal[] = $valorUni[$i] * $quantidade[$i];
					}
					for ($i = 0; $i < 10; $i++){
						$valorGeral = $valorGeral + $valorTotal[$i];
					}
					$acrescimo = $valorGeral*0.05;
					$maisVendido = 0;
					for ($i = 0; $i < 10; $i++){
						if($quantidade[$i] > $maisVendido){
							$maisVendido = $quantidade[$i];
						}
					}
					$x = 1;
					for ($i = 0; $i < 10; $i++){
						echo "<b>Produto ".$x."</b><br>";
						echo "Quantidade vendida: ".$quantidade[$i]."<br>";
						echo "Valor unitário: R$ ".$valorUni[$i]."<br>";
						echo "Valor Total: R$ ".$valorTotal[$i]."<br>";
						echo "<br>";
						$x++;
					}
					echo "<b>";
					echo "Valor Geral das vendas: R$ ".$valorGeral."<br>";
					echo "Comissão paga ao vendedor: R$ ".$acrescimo."<br>";
					$y = 1;
					for ($i = 0; $i < 10; $i++){
						if($quantidade[$i] == $maisVendido){
							echo "Produto ".$y." é o mais vendido, tem valor de R$ ".$valorUni[$i]." e sua posição no vetor é ".$i;
						}
						$y++;
					}
					echo "</b>";
				?>
		</fieldset>
	</form>
	</div>
</body>
</html>