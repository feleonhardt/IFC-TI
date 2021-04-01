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
	$preco = 0.18;
		if(isset($_POST['preco'])){
			$preco = $_POST['preco'];
		}
?>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 26</legend>
			<label>Preço do pão: R$</label>
			<input type="number" name="preco" id="n" step="0.0001" required value="<?php echo $preco ?>"/>
            <br><br>
            <center><input type="submit" value="Gerar"></center>
			<center><br>
				<?php 
					echo "Preço do pão: R$ ".$preco."<br>";
					echo "Panificadora Pão de Ontem - Tabela de preços <br>";
					for ($i = 1; $i <= 50 ; $i++) { 
						echo $i." - R$ ".($preco * $i)."<br>";
					}
				?>
			</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>