<?php
	$n1 = " ";
    if(isset($_POST['n1'])){
      $n1 = $_POST['n1'];
    }
    $n2 = " ";
    if(isset($_POST['n2'])){
      $n2 = $_POST['n2'];
    }
    $n3 = " ";
    if(isset($_POST['n3'])){
      $n3 = $_POST['n3'];
    }

    include 'ex03.php';

    $resultado = soma($n1, $n2, $n3);
	echo "<fieldset>Soma = ".$resultado."</fieldset>";

	function soma($n1, $n2, $n3){
		return $n1 + $n2 + $n3;
	}
?>