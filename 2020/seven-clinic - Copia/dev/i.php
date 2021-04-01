<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'index';

        $explode = explode('/', $url);
        $dir = "pag/";
        $ext = ".php";
        // echo $_SESSION['REQUEST_URL'];
        
        // echo $dir.$explode['0'].$ext;
        // var_dump($_GET);
        if (file_exists($dir.$explode['0'].$ext)) {
            include($dir.$explode['0'].$ext);
        }else {
            echo "Página não encontrada!";
        }
    ?>
</body>
</html>