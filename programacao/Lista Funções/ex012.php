<?php
	$texto = " ";
    if(isset($_POST['texto'])){
      $texto = $_POST['texto'];
    }

    include 'ex12.php';

    $novoTexto = string($texto);
    echo "<fieldset>".$novoTexto."</fieldset>";

    function string($texto){
    	$string = str_shuffle($texto);
    	return strtoupper($string);
    }
	
?>