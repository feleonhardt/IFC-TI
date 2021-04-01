<?php
	$linhas = "";
	if(isset($_POST['linhas'])){
		$linhas = $_POST['linhas'];
	}
	$colunas = "";
	if(isset($_POST['colunas'])){
		$colunas = $_POST['colunas'];
	}

	include 'ex13.php';

	retangulo($linhas, $colunas);

	function retangulo($linhas, $colunas){
		if($linhas < 1 || $linhas > 20){
			$linhas = 5;
		}
		if($colunas < 1 || $colunas > 20){
			$colunas = 7;
		}
		echo "<fieldset>";
		for ($i = 1; $i <= $linhas; $i++) { 
			if($i == 1 || $i == $linhas){
				for ($j = 1; $j <= $colunas; $j++) { 
					if($j == 1 || $j == $colunas){
						echo "+";
					}
					else{
						echo "-";
					}
				}
				echo "<br>";
			}
			else{
				for ($j = 1; $j <= $colunas; $j++) { 
					if($j == 1 || $j == $colunas){
						echo "| ";
					}
					else{
						echo "-";
					}
				}
				echo "<br>";
			}
		}
		echo "</fieldset>";
	}
?>