<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  include 'connect/connect.php';
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $radio = isset($_POST['radio'])?$_POST['radio']:'codigo';
?>

<head>
  <script>
    function excluirRegistro(url){
      if (confirm("Confirmar Exclusão?"))
        location.href = url;
    }
  </script>
  <meta charset="UTF-8" />
  <title>Exercicio 1</title>
  <link href="css/estilo.css">
</head>

<body>
  <center>
  <form method="post">
    <h3>Venda</h3><br /> 
      <input type="text" name="pesquisa" value="<?php echo $pesquisa; ?>" />
    <center><br /><br />
      <input id="1" type="radio" name="radio" value="codigo" <?php echo $radio == 'codigo' ? 'checked ' : ' '; ?>/>
      <label for="1">Código</label>
      <input id="2" type="radio" name="radio" value="descricao" <?php echo $radio == 'descricao' ? 'checked ' : ' '; ?>/>
      <label for="2">Descrição</label>
      <input id="3" type="radio" name="radio" value="dataVenda" <?php echo $radio == 'dataVenda' ? 'checked ' : ' '; ?>/>
      <label for="3">Data de venda</label><br /><br />
      <input type="submit" value="Pesquisar" />
    </center>
    </form>
    <br /><br /><br />
    <br />
    <table>
      <thead>
        <th scope="col">Código</th>
        <th scope="col">Descrição</th>
        <th scope="col">Data de venda</th>
        <th scope="col">Valor unitário</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Valor por item</th>
        <th scope="col">Excluir</th>
      </thead>
      <?php
        if ($radio == 'codigo') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio.' = '. $pesquisa. ' order by '.$radio;
          }
          $sql = 'select * from '. $tb_venda. $pesquisa;
        } elseif ($radio == 'descricao') {
          $sql = 'select * from '. $tb_venda. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } elseif ($radio == 'dataVenda') {
          $sql = 'select * from '. $tb_venda. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        }
        $resultado = mysqli_query($conexao,$sql);
        while ($row = mysqli_fetch_array($resultado)) {
          $soma = $row['valorUnit'] * $row['quantidade'];
          echo '<tr>';
          echo '<td>'. $row['codigo']. '</td>';
          echo '<td>'. $row['descricao']. '</td>';
          echo '<td>'. $row['dataVenda']. '</td>';
          echo '<td>'. $row['valorUnit']. '</td>';
          echo '<td>'. $row['quantidade']. '</td>';
          echo '<td>'. $soma. '</td>';
          ?>
          <td><a href="javascript:excluirRegistro('exclusao.php?acao=excluir&codigo=<?php echo $row[0].'&tabela='.$tb_venda.'&url=atv'; ?>')">Excluir</a></td></tr>;
          </tr>
          <?php
        }
      ?>
    </table>
  </center>
</body>

</html>