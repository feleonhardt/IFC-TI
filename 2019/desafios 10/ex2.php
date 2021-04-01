<!DOCTYPE html>
<?php
	$usuario= isset($_POST['usuario']) ? $_POST['usuario'] : '';
	$senha= isset($_POST['senha']) ? $_POST['senha'] : '';
	$titulo = "usuario e senha";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>	
	<h1><?php echo $titulo;?></h1>
	<form action="" method="post">
		Usuário: <input type="text" name="usuario" id="usuario" value=""><br>
		Senha: <input type="password" name="senha" id="senha" value=""><br>
		<input type="submit" name="acao" id="acao" value="ENVIAR">
	</form>
		<?php
		if ($senha!="" and $usuario!="") {
			if ($usuario==$senha) {
				echo "<br>A senha informada deve ser diferente do Usuário!";
			}else {
				echo "<br>Logado!";
			}
		}
		else
			echo "<br>Informe o usuário e senha!";
		?>
</body>
</html>