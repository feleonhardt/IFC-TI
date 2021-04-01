<?php
	$n = " ";
    if(isset($_POST['n'])){
      $n = $_POST['n'];
    }

    include 'ex09.php';

	$nInvertido = inverter($n);
	function inverter($n){
		return strrev($n);
	}

	echo "<fieldset>".$nInvertido."</fieldset>";
?>