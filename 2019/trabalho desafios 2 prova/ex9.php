<!DOCTYPE html>
<?php
	$data= isset($_POST['data']) ? $_POST['data'] : '';
	$titulo = "DATA";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="post">
		Data (dd/mm/aaaa): <input type="text" name="data" id="data" value=""><br>
		<input type="submit" name="acao" id="acao" value="Verificar"><br>
		
	</form>
		<?php
			if ($data!='') {
			
				function Verifica_Data($val){
					$date = explode("/","$val");
					$dia = $date[0];
					$mes = $date[1];
					$ano = $date[2];

					echo "<br>";
					echo $dia."/";
					echo $mes."/";
					echo $ano."<br>";

					$resposta = checkdate($mes,$dia,$ano);
					if ($resposta == 1){
					   echo "<br>Data Válida!";
					} else {
					   echo "<br>Data Inválida!";
					}
				}
				Verifica_Data($data);
			}
		?>
</body>
</html>