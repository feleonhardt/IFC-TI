<?php
	$n = " ";
    if(isset($_POST['n'])){
      $n = $_POST['n'];
    }

    include 'ex02.php';

	impressao($n);
	function impressao($n){
		echo "<fieldset>";
		for ($i = 1; $i <= $n ; $i++) { 
			for ($j = 1; $j <= $i ; $j++) { 
				if($j != $i){
					echo $j." ";
				}
				else{
					echo $j."<br>";
				}
			}
		}
		echo "</fieldset>";
	}
?>