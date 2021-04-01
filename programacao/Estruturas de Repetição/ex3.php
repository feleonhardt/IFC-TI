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
			<legend>Exercício 03</legend>
			<label>Nome: </label>
			<input type="text" name="nome" id="n" required value="<?php echo $nome ?>"/>
            <br><br>
            <label>Idade: </label>
			<input type="number" name="idade" id="n" required value="<?php echo $idade ?>"/>
            <br><br>
            <label>Salário: </label>
			<input type="text" name="salario" id="n" step="0.001" required value="<?php echo $salario ?>"/>
            <br><br>
            <label>Sexo: </label>
			<input type="text" name="sexo" id="n" required value="<?php echo $sexo ?>"/>
            <br><br>
            <label>Estado: </label>
			<input type="text" name="estado" id="n" required value="<?php echo $estado ?>"/>
            <br><br>
            <center><input type="submit" value="Verificar"></center>
			<br>
			<center>
				<?php 
					$caracter = strlen ($nome);
					if($caracter > 3){
						echo "Nome: Campo Válido<br>";
					}
					else{
						echo "Nome: Campo Inválido<br>";
					}

					if($idade >= 0 && $idade <= 150){
						echo "Idade: Campo Válida<br>";
					}
					else{
						echo "Idade: Campo Inválida<br>";
					}

					if($salario > 0){
						echo "Salário: Campo Válido<br>";
					}
					else{
						echo "Salário: Campo Inválido<br>";
					}

					if($sexo == "f" || $sexo == "m"){
						echo "Sexo: Campo Válido<br>";
					}
					else{
						echo "Sexo: Campo Inválido<br>";
					}

					if($estado == "s" || $estado == "c" || $estado == "v" || $estado == "d"){
						echo "Sexo: Campo Válido<br>";
					}
					else{
						echo "Sexo: Campo Inválido<br>";
					}
				?>
			</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>