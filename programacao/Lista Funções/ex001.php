<?php
	$n = " ";
    if(isset($_POST['n'])){
      $n = $_POST['n'];
    }

    include 'ex01.php';

	impressao($n);
	function impressao($n){
		echo "<fieldset>";
		for ($i = 1; $i <= $n ; $i++) { 
			for ($j = $i; $j >= 1 ; $j--) { 
				if($j != 1){
					echo $i;
				}
				else{
					echo $i."<br>";
				}
			}
		}
		echo "</fieldset>";
	}
?>