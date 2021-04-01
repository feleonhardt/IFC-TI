<!DOCTYPE html>
<?php
	$letra='a';
	$le= isset($_POST[$letra]) ? $_POST[$letra] : 0;
	$cont=0;
	$titulo = "SEM";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body><center>
	<h1>Bhaskara</h1><br>
	<h2>ax^2+bx+c</h2><br>
	<form action="" method="post">
		<?php
			
			echo "Valor de '".$letra."' <input type='text' name='".$letra."' id='".$letra."' value='".$le."'><br>";
			if ($letra=='a') {
				$a=$le;
				if ($a!=0 and $a!='') {
					$aa=$a;
					echo "a = ".$aa;
					$letra='b';

					$le= isset($_POST[$letra]) ? $_POST[$letra] : 0;
					echo "<br>Valor de '".$letra."' <input type='text' name='".$letra."' id='".$letra."' value='".$le."'><br>";
					if ($letra=='b') {
						$b=$le;
						if ($b!='') {
							$bb=$b;
							echo "b = ".$bb;
							$letra='c';

							$le= isset($_POST[$letra]) ? $_POST[$letra] : 0;
							echo "<br>Valor de '".$letra."' <input type='text' name='".$letra."' id='".$letra."' value='".$le."'><br>";
							if ($letra=='c') {
								$c=$le;
								if ($c!='') {
									$cc=$c;
									echo "c = ".$cc;
									$delta=(($bb*$bb)-(4*$aa*$cc));
									if ($delta<0) {
										echo "<br>A função não possui raizes reais!";
									}elseif ($delta==0) {
										$x=((-$bb)+sqrt($delta))/(2*$aa);
										echo "<br>A função possui apenas uma raiz real: ".$x;
									}else{
										$x1=((-$bb)+sqrt($delta))/(2*$aa);
										$x2=((-$bb)-sqrt($delta))/(2*$aa);
										echo "<br>A função possui duas raizes reais: ".$x1." e ".$x2;
									}
								}
							}
						}
					}
				}else{
				echo "<br>Não é uma função do 2° grau!";
				}
			}
			echo "<br><br><input type='submit' name='acao' id='acao' value='Avançar'>";	
		?>
		</form>
	</center>
</body>
</html>