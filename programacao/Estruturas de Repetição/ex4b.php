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
	$popA = 80000;
		if(isset($_POST['popA'])){
			$popA = $_POST['popA'];
		}
	$taxaA = 3;
		if(isset($_POST['taxaA'])){
			$taxaA = $_POST['taxaA'];
		}
	$popB= 200000;
		if(isset($_POST['popB'])){
			$popB = $_POST['popB'];
		}
	$taxaB = 1.5;
		if(isset($_POST['taxaB'])){
			$taxaB = $_POST['taxaB'];
		}
?>
<body>
	<form action="" method="post">
		<br>
		<fieldset>
			<legend>Exercício 04</legend>
			<label>População país A: </label>
			<input type="number" name="popA" id="n" required value="<?php echo $popA ?>"/>
            <br><br>
            <label>Taxa de crescimento país A: </label>
			<input type="number" name="taxaA" id="n" step="0.001" required value="<?php echo $taxaA ?>"/>
            <br><br>
            <label>População país B: </label>
			<input type="number" name="popB" id="n" required value="<?php echo $popB ?>"/>
            <br><br>
            <label>Taxa de crescimento país B: </label>
			<input type="number" name="taxaB" id="n" step="0.001" required value="<?php echo $taxaB ?>"/>
            <br><br>
            <center><input type="submit" value="Gerar"></center>
			<center><br><br>
				<?php 
					$anos = 0;
					$cresceA = $taxaA / 100;
					$cresceB = $taxaB / 100;

					if(($popA < $popB && $cresceA > $cresceB) || ($popB < $popA && $cresceB > $cresceA)){
						while ($popA <= $popB){
							$popA = $popA + ($popA * $cresceA);
							$popB = $popB + ($popB * $cresceB);
							$anos++;
						}

						echo "Após ".$anos." anos o país A ultrapassará ou igualará o país B em números de habitantes";
						echo "<br>País A: ".$popA;
						echo "<br>País B: ".$popB;
					}else{
						echo "O país com menor população deve ter uma taxa de crescimento maior. Insira novamente os valores.";
					}

				?>
			</center>
		</fieldset>
	</form>
	<br><br>
</body>
</html>