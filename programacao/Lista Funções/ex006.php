<?php

	include 'ex06.php'; 

	$horario = " ";
    if(isset($_POST['horario'])){
      $horario = $_POST['horario'];
    }

    $vetHorario = explode(":", $horario);

    $horarioAP = conversao($vetHorario);
    function conversao($vetHorario){
    	if(($vetHorario[0] - 12) < 0){
    		$hora = $vetHorario[0];
    		$minuto = $vetHorario[1];
    		$A = "AM";
    		return $hora.":".$minuto." ".$A;
    	}
    	elseif(($vetHorario[0] - 12) >= 0){
    		$hora = $vetHorario[0] - 12;
    		$minuto = $vetHorario[1];
    		$P = "PM";
    		return $hora.":".$minuto." ".$P;
    	}
    }

    saida($horarioAP);
    function saida($horario){
    	echo "<fieldset>";
    	echo $horario;
    }
?>