<?php
function table($conexao){
  echo "<table class='highlight'>";
    echo "<tr><th>Matrícula</th><th>Nome</th><th>Nota 1</th><th>Nota 2</th><th>Nota 3</th><th>Média</th></tr>";
    $totalNota1=0;
    $totalNota2=0;
    $totalNota3=0;
    $totalMedia=0;
    $cont=0;
    while ($linha = $conexao->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr><td>{$linha['matricula']}</td><td>{$linha['nome']}</td><td";
      $nota1Tela=number_format($linha['nota1'],1,',','.');
      cor($nota1Tela);
      $totalNota1+=$linha['nota1'];
      echo ">{$nota1Tela}</td><td";
      $nota2Tela=number_format($linha['nota2'],1,',','.');
      cor($nota2Tela);
      $totalNota2+=$linha['nota2'];
      echo ">{$nota2Tela}</td><td";
      $nota3Tela=number_format($linha['nota3'],1,',','.');
      cor($nota3Tela);
      $totalNota3+=$linha['nota3'];
      echo ">{$nota3Tela}</td><td";
      $mediaTela=number_format($linha['media'],1,',','.');
      cor($mediaTela);
      $totalMedia+=$linha['media'];
      echo " id='media'>{$mediaTela}</td></tr>";
      $cont++;
    }
    // $conexao = $GLOBALS['PDO']->query("SELECT avg(nota1) as nota1, avg(nota2) as nota2, avg(nota3) as nota3, avg((nota1+nota2+nota3)/3) as media  FROM alunos;");
    // $linha = $conexao->fetch(PDO::FETCH_ASSOC);
    // echo "<tr><td></td><td></td><td";
    // cor($linha['nota1']);
    // echo ">{$linha['nota1']}</td><td";
    // cor($linha['nota2']);
    // echo ">{$linha['nota2']}</td><td";
    // cor($linha['nota3']);
    // echo ">{$linha['nota3']}</td><td";
    // cor($linha['media']);
    // echo ">{$linha['media']}</td></tr>";
    // echo "</table>";
    if ($cont!=0) {
      $totalNota1=$totalNota1/$cont;
      $totalNota2=$totalNota2/$cont;
      $totalNota3=$totalNota3/$cont;
      $totalMedia=$totalMedia/$cont;

    $totalNota1Tela=number_format($totalNota1,1,',','.');
    $totalNota2Tela=number_format($totalNota2,1,',','.');
    $totalNota3Tela=number_format($totalNota3,1,',','.');
    $totalMediaTela=number_format($totalMedia,1,',','.');
    echo "<tr><td></td><td></td><td";
    cor($totalNota1Tela);
    echo " style='font-weight: 900; font-size: 1.1em;'>{$totalNota1Tela}</td><td";
    cor($totalNota2Tela);
    echo " style='font-weight: 900; font-size: 1.1em;'>{$totalNota2Tela}</td><td";
    cor($totalNota3Tela);
    echo " style='font-weight: 900; font-size: 1.1em;'>{$totalNota3Tela}</td><td";
    cor($totalMediaTela);
    echo " style='font-weight: 900; font-size: 1.1em;'>{$totalMediaTela}</td></tr>";

  }else {
    echo "<tr><th colspan='6' style='text-align: center; color: red;'>Nenhum resultado!</th></tr>";
  }
    echo "</table>";
}

function cor($linha){
  echo " class='";
  if ($linha< 7) {
    echo "ruim";
  }else {
    echo "boa";
  }
  echo "'";
}


 ?>
