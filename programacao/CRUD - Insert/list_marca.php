<!DOCTYPE html>
<?php
    include 'connect/connect.php';
    $titulo = "Lista de Marcas";
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
          <legend>Lista de Marcas</legend>
            <center>
            <input type="text" name="pesquisar" value="<?php echo $pesquisar ?>"><br><br>
        Pesquisar por: 
            <input type="radio" name="pesquisa" <?php if($pesquisa == "codigo") echo "checked"; ?> value="codigo" checked>Código
            <input type="radio" name="pesquisa" <?php if($pesquisa == "descricao") echo "checked"; ?> value="descricao">Descrição<br><br><br>
            <input type="submit" name="" value="Enviar" class="button">
          <a href = 'cad_Marca.php?tabela=<?php echo $tb_marca;?>'>Adicionar</a> 
          <br><br><br>
      <table>
        <tr>
          <th>Código</th>
          <th>Descrição</th>
          <th>Excluir</th>
        </tr>
        <?php
          if($pesquisa == ''){
              $sql = 'SELECT * FROM '.$tb_marca;
          }
          else{
              if($pesquisa == "codigo"){
                 $sql = "SELECT * FROM ".$tb_marca." WHERE codigo = ".$pesquisar." ORDER BY codigo";
              }
              elseif($pesquisa == "descricao"){
                $sql = "SELECT * FROM ".$tb_marca." WHERE descricao LIKE '".$pesquisar."%' ORDER BY descricao";
              }
            }
            $resultado = mysqli_query($conexao, $sql);
            while ($row = mysqli_fetch_array($resultado)) {
                echo "<tr><td>".$row[0]."</td><td>". $row[1]."</td><td><a href =javascript:excluirRegistro('acao.php?acao=excluir&codigo=$row[0]&tabela=$tb_marca&pagina=list_marca.php')>Excluir</a></td></tr>";
            }
        ?>
       </table>
     </center>
    </fieldset>
  </form>
</body>
</html>
