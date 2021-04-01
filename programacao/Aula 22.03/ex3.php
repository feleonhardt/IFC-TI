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
	$idade = "";
		if(isset($_POST['idade'])){
			$idade = $_POST['idade'];
		}
	$salario = "";
		if(isset($_POST['salario'])){
			$salario = $_POST['salario'];
		}
	$sexo = "";
		if(isset($_POST['sexo'])){
			$sexo = $_POST['sexo'];
		}
	$estado = "";
		if(isset($_POST['estado'])){
			$estado = $_POST['estado'];
		}
?>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 02</legend>
			<label>Nome: </label>
			<input type="text" name="nome" id="n" required value="<?php echo $nome ?>"/>
            <br><br>
            <label>Idade: </label>
			<input type="number" name="idade" id="n" required value="<?php echo $idade ?>"/>
            <br><br>
            <label>Salário: </label>
			<input type="number" name="salario" id="n" required value="<?php echo $salario ?>"/>
            <br><br>
            <label>Sexo: </label>
			<input type="text" name="sexo" id="n" required value="<?php echo $sexo ?>"/>
            <br><br>
            <label>Estado Civil: </label>
			<input type="text" name="estado" id="n" required value="<?php echo $estado ?>"/>
            <br><br>
            <center><input type="submit" value="Verificar"></center>
			<br>
			<center>
				<?php 
					if(strlen($nome) > 3){
						echo "Nome válido <br>";
					}
					else{
						echo "Nome com menos de 3 caracteres...Digite novamente o nome <br>";
					}

					if($idade >= 0 && $idade <= 150){
						echo "Idade válida <br>";
					}
					else{
						if($idade < 0){
							echo "Idade menor que zero...Digite novamente a idade <br>";
						}
						elseif($idade > 150){
							echo "Idade maior que 150...Digite novamente a idade <br>";
						}
					}

					if($salario > 0){
						echo "Salário válido <br>";
					}
					else{
						echo "Salário menor que zero...Digite novamente o salário <br>";
					}

					if($sexo == "F" || $sexo == "f" || $sexo == "M" || $sexo == "m"){
						echo "Sexo válido <br>";
					}
					else{
						echo "Sexo inválido...Digite novamente o sexo <br>";
					}

					if($estado == "s" || $estado == "S" || $estado == "c" || $estado == "C" || $estado == "v" || $estado == "V" || $estado == "d" || $estado == "D"){
						echo "Estado Civil válido <br>";
					}
					else{
						echo "Estado Civil inválido...Digite novamente o estado civil <br>";
					}
				?>
			</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>