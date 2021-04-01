<?php
	/* Database connection settings */

	include_once "assets/conf/default.inc.php";
	require_once "assets/conf/Conexao.php";
	$pdo = Conexao::getInstance();
	$result = $pdo->query("SELECT * FROM dados_novo;") or die('data selection for google map failed: '.$pdo->error);
 	while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

		// $latitudes[] = $row['latitude'];
		// $longitudes[] = $row['longitude'];
		// $coordinates[] = 'new google.maps.LatLng(' . $row['latitude'] .','. $row['longitude'] .'),';
		// $horas[] = $row['hora'];
		// $ids[] = $row['ID'];
	}
?>

<!DOCTYPE html>
<html>
	<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
		<title>MAPA | TCC</title>
	</head>

	<body>
	  <nav class="black">
			TACÓGRAFO INTELIGENTE
		</nav>

		<div class="row container" style="padding-top: 50px;">
			<div class="col s12 l4">
				<form action="" method="post">
          <div class="input-field">
  					<select class="browser-default">
  						<option value="1">IFC até COC</option>
  						<option value="2">COC até RUY</option>
  					</select>
  					<!-- <label>Selecione o trajeto:</label> -->
  				</div>


          <button type="submit" id="submit" name="import" class="btn-large green">BUSCAR</button><br><br>
			  </form>
			</div>
			<div class="col s12 l6">
				<div id="map" style="width: auto; height: 80vh;"></div>
			</div>
		</div>

			<script type="text/javascript" src="assets/js/materialize.js"></script>
			<script type="text/javascript" src="assets/js/jQuery.js"></script>
			<script type="text/javascript" src="assets/js/custom.js"></script>

	</body>
</html>
