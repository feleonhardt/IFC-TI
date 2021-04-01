<?php
	$n = " ";
    if(isset($_POST['n'])){
      $n = $_POST['n'];
    }

    include 'ex08.php';

	nDigitos($n);
	function nDigitos($n){
		echo "<fieldset>"."Número de Digitos: ".strlen($n)."</fieldset>";
	}
?>