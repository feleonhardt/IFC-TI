<?php
define("ORIGEM", "teste.ppm");
define("DESTINO", "teste_teste.pgm");


$arquivo = fopen(ORIGEM,'r');
$vet = array();
if ($arquivo == false) die('Não foi possível abrir o arquivo.');
while(true) {
	$vet[] = fgets($arquivo);
	if ($vet[(count($vet))-1]==null){
    break;
  }
}

for ($i=4; $i < ((count($vet))-1) ; $i++) {
  $vetor = explode(' ',$vet[$i]);
  for ($x=0; $x < count($vetor) ; $x++) {
    $vetor_ok[] = $vetor[$x];
  }
}

$vet_cinza[] = str_replace('3', '2', $vet[0]);
$vet_cinza[] = str_replace('ppm', 'pgm', $vet[1]);
$col = explode(' ',$vet[2]);
for ($a=0; $a < count($col) ; $a++) {
  $vet_cinza[] = $col[$a];
}
$vet_cinza[] = $vet[3];

for ($i=0; $i < count($vetor_ok); $i++) {
  $vetor_ok[$i] = (int)$vetor_ok[$i];
}

for ($n=0; $n < (count($vetor_ok)-2) ; $n=$n+3) {
  $res = ($vetor_ok[$n] + $vetor_ok[$n+1] + $vetor_ok[$n+2])/3;
  $vet_cinza[] = $res;
}
fclose($arquivo);

$dados = $vet_cinza[0].PHP_EOL;
$dados .= $vet_cinza[1].PHP_EOL;
$dados .= $vet_cinza[2].' '.$vet_cinza[3];
$dados .= $vet_cinza[4];

for ($g=5; $g < count($vet_cinza) ; $g++) {
  $dados .= $vet_cinza[$g].PHP_EOL;
}

$fp = fopen(DESTINO, "w");
$escreve = fwrite($fp, $dados);
fclose($fp);

echo $dados;
?>
