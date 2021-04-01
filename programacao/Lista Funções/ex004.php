<?php
	$n = " ";
    if(isset($_POST['n'])){
      $n = $_POST['n'];
    }

    include 'ex04.php';

	impressao($n);
	function impressao($n){
		echo "<fieldset>";
		if($n > 0){
			echo "P";
		}
		elseif($n <= 0){
			echo "N";
		}
		echo "</fieldset>";
	}
?>