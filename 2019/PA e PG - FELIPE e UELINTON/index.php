<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>HOME</title>
    <link rel="stylesheet" href="assets/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/casa.png">
    <script type="text/javascript" src="assets/js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="assets/js/materialize.js"></script>
  </head>
  <body style="background-color: #222;">
    <?php include("menu.html"); ?><br>
    <div class="row container">
    <div class="col s12 l4">
      <div class="card black">
        <div class="card-content white-text" align="justify">
          <span class="card-title center"><i class="material-icons" style="font-size: 600%; margin-top: 20%">create</i></span>
        </div>
        <div class="card-action center">
          <a href="page1.php">GERAR PA&PG</a>
        </div>
      </div>
    </div>
    <div class="col s12 l4">
      <div class="card black">
        <div class="card-content white-text" align="justify">
          <span class="card-title center"><i class="material-icons" style="font-size: 600%; margin-top: 20%">youtube_searched_for</i></span>
        </div>
        <div class="card-action center">
          <a href="page2.php">ANALISAR ARQUIVO</a>
        </div>
      </div>
    </div>
    <div class="col s12 l4">
      <div class="card black">
        <div class="card-content white-text" align="justify">
          <span class="card-title center"><i class="material-icons" style="font-size: 600%; margin-top: 20%">trending_up</i></span>
        </div>
        <div class="card-action center">
          <a href="page3.php">GERAR GRÁFICO</a>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>
