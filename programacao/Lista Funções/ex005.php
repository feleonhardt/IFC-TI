<?php
	$taxaImposto = " ";
    if(isset($_POST['taxaImposto'])){
      $taxaImposto = $_POST['taxaImposto'];
    }
    $custo = " ";
    if(isset($_POST['custo'])){
      $custo = $_POST['custo'];
    }

    include 'ex05.php';

	somaImposto($taxaImposto, $custo);
	function somaImposto($taxaImposto, $custo){
		$custo = $custo + (($taxaImposto/100)*$custo);
		echo "<fieldset>Custo com Imposto: R$ ".$custo."</fieldset>";
	}
?>