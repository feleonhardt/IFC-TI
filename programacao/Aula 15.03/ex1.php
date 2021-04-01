<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo3.css" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="img/php.png" />
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title>Exercicios PHP</title>
</head>
<body>
    <?php
        $saque = 0;
        if(isset($_POST['saque'])){
            $saque = $_POST['saque'];
        }
    ?>
<div id="borda1">
    <img src="img/borda2.jpg">
</div>
<div id="corpo">
    <form action="" method="post">
        <br><br><br><br>
        <fieldset>
            <legend>Exercício</legend>
                <br>
                <label>Valor do saque: R$ </label>
                <input type="number" name="saque" id="n" ste="0.0001"/>
                <br><br>
                <center><input type="submit" value="Calcular"></center>
                <br>
                    <?php
                        if($saque>=5 && $saque<=1000){
                            $aux = $saque;
                            $uni = $aux % 10; 
                            $aux = $aux / 10;
                            $dez = $aux % 10; 
                            $c = $aux / 10;
                            $cen = intval($c);
                        
                            $n100 = $cen;
                            if($dez>=5){
                                $n50 = intval($dez/5);
                                $n20 = 
                                $n10 = $dez-5;
                            }
                            else{
                                $n50 = 0;
                                $n10 = $dez;
                            }
                            if($uni>=5){
                                $n5 = intval($uni/5);
                                $n1 = $uni-5;
                            }
                            else{
                                $n5 = 0;
                                $n1 = $uni;
                            }

                            echo "Valor do saque: R$ ".$saque;
                            if ($n1!=0){
                                echo $n1." cédula de "."<img src='n1.jpg'>";
                            }
                            if ($n5!=0){
                                echo $n5." cédula de "."<img src='n5.jpg'>";
                            }
                            if ($n10!=0){
                                echo $n10." cédula de "."<img src='n10.jpg'>";
                            }
                            if ($n20!=0){
                                echo $n20." cédula de "."<img src='n20.jpg'>";
                            }
                            if ($n50!=0){
                                echo $n50." cédula de "."<img src='n50.jpg'>";
                            }
                            if ($n100!=0){
                                echo $n100." cédula de "."<img src='n100.jpg'>";
                            }
                    }
                ?>
        </fieldset>
    </form>
</div>
<div id="borda2">
    <img src="img/borda2.jpg">
</div>
</body>
</html>