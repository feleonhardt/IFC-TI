<!DOCTYPE html>
<?php
	$title = "Meu primeiro site PHP feio";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title;?></title>
</head>
<body>

	<?php 
		for ($x=0; $x<=10; $x++) {
			for ($tab=0; $tab<=10; $tab++) {
				echo $tab." x ".$x." = ".($tab*$x). "<br>";
			}
		echo "<br><hr><br>";
		}
	?>





	<?php // for ($x=0; $x<1000; $x++) { ?>
		<h2><?php // echo $title;}?></h2>
	
	
</body>
</html>