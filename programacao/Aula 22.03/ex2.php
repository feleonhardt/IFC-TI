<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css" />
    <meta charset="UTF-8" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicios PHP</title>
</head>
<style type="text/css">
	body{
		background-color: #90EE90;
	}
</style>
<?php 
	$nome = "";
		if(isset($_POST['nome'])){
			$nome = $_POST['nome'];
		}
	$senha = "";
		if(isset($_POST['senha'])){
			$senha = $_POST['senha'];
		}
?>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 02</legend>
			<label>Nome do usuário: </label>
			<input type="text" name="nome" id="n" required value="<?php echo $nome ?>"/>
            <br><br>
            <label>Senha: </label>
			<input type="password" name="senha" id="n" required value="<?php echo $senha ?>"/>
            <br><br>
            <center><input type="submit" value="Verificar"></center>
			<br>
			<center>
				<?php 
					if($senha == $nome){
						echo "Erro! A senha não pode ser igual ao nome do usuário...Tente outra senha!";
					}
					else{
						echo "A senha e o usuário são válidos";
					}
				?>
			</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>