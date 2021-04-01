<?php

    include 'ex10.php';

    echo "<fieldset>";

    $somaDados = dados();

    function dados(){
    	$dado1 = rand(1, 6);
    	$dado2 = rand(1, 6);
    	return $dado1 + $dado2;
    }

    echo "Soma dos Dados: ".$somaDados;

    $resultado = resultado($somaDados);

    function resultado($somaDados){
    	if($somaDados == 7 || $somaDados == 11){
	    	return "Ganhou";
	    }
	    elseif($somaDados == 2 || $somaDados == 3 || $somaDados == 12){
	    	return "Perdeu";
	    }
        else{
            return "Continua";
        }
    }

    $ponto = $somaDados;

    if($resultado == "Ganhou"){
        echo "<br>NATURAL - Ganhou";
    }
    elseif($resultado == "Perdeu"){
        echo "<br>CRAPS - Perdeu";
    }
    else{
        while($ponto != $somaDados){
            $somaDados = dados();
            if($ponto == $somaDados){
                echo "<br>Você ganhou";
            }
            if($somaDados == 7){
                break;
            }
        }
    }

    echo "</fieldset>";    
    
?>