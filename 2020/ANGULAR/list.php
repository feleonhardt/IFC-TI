<?php
    $carros = [];
    $carros[0]['id']    = 1;
    $carros[0]['model'] = "Caneta BIC";
    $carros[0]['price'] = 2;
    $carros[1]['id']    = 2;
    $carros[1]['model'] = "Caderno";
    $carros[1]['price'] = 15;
    $carros[2]['id']    = 3;
    $carros[2]['model'] = "Lápis de escrever";
    $carros[2]['price'] = 2.5;
    $carros[3]['id']    = 4;
    $carros[3]['model'] = "Folhas A4";
    $carros[3]['price'] = 35;
    
    $id = 0;
    $view = "";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $view = "single";
    } else {
        $view = "all";
    }
  
    switch($view){
        case "all":
            getAll($carros);
            break;
            
        case "single":
            getNameById($_GET['id'], $carros);
            break;

        case "" :
            //404 - not found;
            break;
    }
   function getNameById($id, $carros){
        foreach ($carros as $carro){
            if($carro['id'] == $id){
                echo json_encode(['solo'=>$carro]);
                break;
            }
        }
    }

    function getAll($carros){
        echo json_encode(['data'=>$carros]);
    }




?>