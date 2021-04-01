<!DOCTYPE html>
<?php
    include 'connect/connect.php';
    $titulo = "Lista de Estados";
    $pesquisar = "";
      if(isset($_POST['pesquisar'])){
        $pesquisar = $_POST['pesquisar'];
      }
    $pesquisa = "";
      if(isset($_POST['pesquisa'])){
        $pesquisa = $_POST['pesquisa'];
      }
?>
<html>
<head>
	<title><?php echo $titulo ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/estilo.css" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <style>
      tr:hover, tr:nth-child(even):hover{
          background-color: #FF1493;
      }
      table tbody tr:nth-child(even){
          background-color:#90EE90;
      }
    </style>
    
    <script>
  		function excluirRegistro(url){
  			if (confirm("Confirmar exclusão?")) {
  				location.href = url ;
  			}
  		}
  	</script>
</head>
<body>
		<form action="" method="post">
        <fieldset>
          <legend>Lista de Estados</legend>
            <center>
            <input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
        Pesquisar por: 
            <input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo" checked>Código
            <input type="radio" name="pesquisa" <?php if($pesquisa == "nome") echo "checked"; ?> value="nome">Nome
            <input type="radio" name="pesquisa" <?php if($pesquisa == "sigla") echo "checked"; ?> value="sigla">Sigla<br><br><br>
            <input type="submit" name="" value="Enviar" class="button">
          <a href = 'cad_Estado.php?tabela=<?php echo $tb_estado;?>'>Adicionar</a> 
          <br><br><br>
      <table>
        <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>Sigla</th>
          <th>Excluir</th>
        </tr>
        <?php
          if($pesquisa == ''){
              $sql = 'SELECT * FROM '.$tb_estado;
          }
          else{
              if($pesquisa == "codigo"){
                 $sql = "SELECT * FROM ".$tb_estado." WHERE codigo = ".$pesquisar." ORDER BY codigo";
              }
              elseif($pesquisa == "nome"){
                $sql = "SELECT * FROM ".$tb_estado." WHERE nome LIKE '".$pesquisar."%' ORDER BY nome";
              }
              elseif($pesquisa == "sigla"){
                $sql = "SELECT * FROM ".$tb_estado." WHERE sigla LIKE '".$pesquisar."%' ORDER BY sigla";
              }
            }
            $resultado = mysqli_query($conexao, $sql);
            while ($row = mysqli_fetch_array($resultado)) {
                echo "<tr><td>".$row[0]."</td><td>", $row[1]."</td><td>".$row[2]."</td><td><a href =javascript:excluirRegistro('acao.php?acao=excluir&codigo=$row[0]&tabela=$tb_estado&pagina=list_estado.php')>Excluir</a></td></tr>";
            }
        ?>
       </table>
     </center>
    </fieldset>
  </form>
</body>
</html>
