<!DOCTYPE html>
<?php
$metros = 0;
if (isset($_GET['metros'])) {
	$metros = $_GET['metros'];
}
	$title = "POST E GET";
	?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title><?php echo $title;?></title>
</head>
<body>
	<form action="" method="get">
		Metros<input type="text" name="metros" id="metros" value=""><br>
		<input type="submit" name="acao" id="acao">
	</form>
	<?php
		$centimetros = $metros * 100;
		echo "<h3>".$metros." metros é igual a ".$centimetros." centimetros </h3>";
	?>
</body>
</html>