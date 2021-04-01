<?php
	/* Database connection settings */
	include_once "assets/conf/default.inc.php";
  require_once "assets/conf/Conexao.php";
  $pdo = Conexao::getInstance();

 	$coordinates = array();
 	$latitudes = array();
	$longitudes = array();
	$horas = array();
 	$ids = array();

	$result = $pdo->query("SELECT * FROM dados;") or die('data selection for google map failed: '.$pdo->error);

 	while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

		$latitudes[] = $row['latitude'];
		$longitudes[] = $row['longitude'];
		$coordinates[] = 'new google.maps.LatLng(' . $row['latitude'] .','. $row['longitude'] .'),';
		$horas[] = $row['hora'];
		$ids[] = $row['ID'];
	}

	//remove the comaa ',' from last coordinate
	$lastcount = count($coordinates)-1;
	$coordinates[$lastcount] = trim($coordinates[$lastcount], ",");
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

		<form class="" action="" method="post">
		<div class="container">
			<h5 class="center">TRAJETO</h5>
			<div class="row">
				<div class="input-field">
					<select class="browser-default">
						<option value="1">IFC até COC</option>
						<option value="2">COC até RUY</option>
					</select>
					<!-- <label>Selecione o trajeto:</label> -->
				</div>
			</div>
		</div>
	</form>
		<div class="row container" style="padding-top: 50px;">
			<div class="col s12 l4">
				<form action="" method="post">
					<button type="submit" id="submit" name="import" class="btn-large green">RECARREGAR</button><br><br>

					<b>INICIAL</b><br>
					Horário: <?php echo $horas[0]; ?><br>
					<?php
						echo "{latitude: {$latitudes[0]}, longitude: {$longitudes[0]}}";
					?><br><br>
					<b>FINAL</b><br>
					Horário: <?php echo $horas[(count($horas)-1)]; ?><br>
					<?php
						echo "{latitude: {$latitudes[(count($latitudes)-1)]}, longitude: {$longitudes[(count($longitudes)-1)]}}";
					?>

			  </form>
			</div>
			<div class="col s12 l6">
				<div id="map" style="width: auto; height: 80vh;"></div>
			</div>
		</div>

		<script>
			function initMap() {
			  var mapOptions = {
			    zoom: 18,
			    center: {<?php echo'lat:'. $latitudes[0] .', lng:'. $longitudes[0] ;?>}, //{lat: --- , lng: ....}
			    mapTypeId: google.maps.MapTypeId.SATELITE
			  };

			  var map = new google.maps.Map(document.getElementById('map'),mapOptions);

			  var RouteCoordinates = [
			  	<?php
			  		$i = 0;
					while ($i < count($coordinates)) {
						echo $coordinates[$i];
						$i++;
					}
			  	?>
			  ];

			  var RoutePath = new google.maps.Polyline({
			    path: RouteCoordinates,
			    geodesic: true,
			    strokeColor: '#080',
			    strokeOpacity: 1.0,
			    strokeWeight: 10
			  });

			  // mark = 'img/origem.png';
			  // flag = 'img/destino.png';

			  startPoint = {<?php echo'lat:'. $latitudes[0] .', lng:'. $longitudes[0] ;?>};
			  endPoint = {<?php echo'lat:'.$latitudes[$lastcount] .', lng:'. $longitudes[$lastcount] ;?>};


				<?php
				for ($i=0; $i < count($latitudes) ; $i++) {
					?>
					var marker = new google.maps.Marker({
						position: {lat: <?php echo $latitudes[$i];?>, lng: <?php echo $longitudes[$i];?>},
				  	// position: {lat: -27.212442, lng: -49.640055},
				  	map: map,
				  	// icon: point,
				  	title:"<?php echo $ids[$i]." -> {$horas[$i]} {latitude: {$latitudes[$i]}, longitude: {$longitudes[$i]}}";?>",
						label: "<?php echo $ids[$i]; ?>",
				  	animation: google.maps.Animation.DROP
				  });
					<?php
				}
				?>

			  RoutePath.setMap(map);
			}

			google.maps.event.addDomListener(window, 'load', initialize);
    	</script>

    	<!--remenber to put your google map key-->
	    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-dFHYjTqEVLndbN2gdvXsx09jfJHmNc8&callback=initMap"></script>
			<script type="text/javascript" src="assets/js/materialize.js"></script>
			<script type="text/javascript" src="assets/js/jQuery.js"></script>
			<script type="text/javascript" src="assets/js/custom.js"></script>

	</body>
</html>
