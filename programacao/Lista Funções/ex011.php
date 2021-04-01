<?php
	$data = " ";
    if(isset($_POST['data'])){
      $data = $_POST['data'];
    }

    include 'ex11.php';
    
    $extenso = data($data);
    echo "<fieldset>".$extenso."</fieldset>";

    function data($data){
    	$vetData = explode("-", $data);
		
		$dia = $vetData[2];
		
		$mes = $vetData[1];

		if($mes == "01"){
			$mesExtenso = "Janeiro";
		}
		if($mes == "02"){
			$mesExtenso = "Fevereiro";
		}
		if($mes == "03"){
			$mesExtenso = "Março";
		}
		if($mes == "04"){
			$mesExtenso = "Abril";
		}
		if($mes == "05"){
			$mesExtenso = "Maio";
		}
		if($mes == "06"){
			$mesExtenso = "Junho";
		}
		if($mes == "07"){
			$mesExtenso = "Julho";
		}
		if($mes == "08"){
			$mesExtenso = "Agosto";
		}
		if($mes == "09"){
			$mesExtenso = "Setembro";
		}
		if($mes == "10"){
			$mesExtenso = "Outubro";
		}
		if($mes == "11"){
			$mesExtenso = "Novembro";
		}
		if($mes == "12"){
			$mesExtenso = "Dezembro";
		}

		$ano = $vetData[0];

		return $dia." de ".$mesExtenso." de ".$ano;
    }
?>