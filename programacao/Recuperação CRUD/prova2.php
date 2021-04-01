<!DOCTYPE html>
<?php 
	include 'connect/connect.php';
	$title = "Listas";
	$aspas = '"';
	$soma = 0;
	$tipo = 0;
	?>	

<html>
<head>

	<style>
		tr:nth-child(even){
			background-color: #AAAAFF;
		}
		tr:hover{
			background-color: ;
		}

	</style>

	<script> 
		function excluirRegistro(url) {
			if (confirm("Confirmar Exclusão?")) {
				location.href = url;
			}
		}
	</script>


	<meta charset="utf-8">
	<title><?php echo $title ?></title>
	<!-- <link rel="stylesheet" href="css/estilo.css"> -->
</head>
<body>
	<form method="post">
			<fieldset>
				<legend>Química, TC Básico</legend>
				<br>
				<center>
				<?php 
					$de = isset($_POST['de']) ? $_POST['de'] : '';
					$ate = isset($_POST['ate']) ? $_POST['ate'] : '';
					$escolha = isset($_POST['escolha']) ? $_POST['escolha'] : '';
				?>
				<label>De</label>
				<input type="text" name="de" id="de" size="37" value="<?php echo $de?>">
				<label>Até</label>
				<input type="text" name="ate" id="ate" size="37" value="<?php echo $ate?>">
				<input type="submit" name="acao" id="acao" value="Buscar"><br>
				<input type="radio" name="escolha" id="escolha" value="codigo" checked="" <?php if($escolha == 'codigo') echo 'checked' ?>>Código
				<input type="radio" name="escolha" id="escolha" value="paciente" <?php if($escolha == 'paciente') echo 'checked' ?>>Paciente
				<input type="radio" name="escolha" id="escolha" value="medico" <?php if($escolha == 'medico') echo 'checked' ?>>Medico
				<input type="radio" name="escolha" id="escolha" value="dataconsulta" <?php if($escolha == 'dataconsulta') echo 'checked' ?>>Data da consulta
				<input type="radio" name="escolha" id="escolha" value="valor" <?php if($escolha == 'valor') echo 'checked' ?>>Valor
				<br>
				
				<table border="4">
					<tr>
						<td><b>Código</b></td>
						<td><b>Paciente</b></td>
						<td><b>medico</b></td>
						<td><b>Data Consulta</b></td>
						<td><b>Tipo Consulta</b></td>
						<td><b>valor</b></td>
						<td><b>Excluir</b></td>
					</tr>

					<?php  
					$sql ="select * from $tb_prova";
						if ($escolha == 'codigo') {
							if ($de == '') {
								$de = '';
							}
							else{
								$de = ' WHERE ' .$escolha. ' = '.$de. ' ORDER BY ' .$escolha;
							}
							$sql = 'SELECT * FROM ' .$tb_prova. $de;
						}
						elseif ($escolha == 'dataconsulta') {
							$de = date('Y-m-d', strtotime(str_replace("/", "-", $de)));
							$ate = date('Y-m-d', strtotime(str_replace("/", "-", $ate)));
							$sql = 'SELECT * FROM '.$tb_prova." WHERE dataconsulta >= '".$de."' AND dataconsulta <= '".$ate."' ORDER BY dataconsulta";
						}
						elseif ($escolha == 'paciente') {
							$sql = ' SELECT * FROM ' .$tb_prova. ' WHERE '.$escolha.' like "'.$de.'%" ORDER BY ' .$escolha;
						}
						elseif ($escolha == 'medico') {
							
							$sql = ' SELECT * FROM ' .$tb_prova. ' WHERE '.$escolha.' like "'.$de.'%" ORDER BY ' .$escolha;
						}
						elseif ($escolha == 'valor') {
							$sql = ' SELECT * FROM ' .$tb_prova. " WHERE valor >= '".$de."' AND valor <= '".$ate."' ORDER BY valor";
						}
						elseif ($escolha == 'tipo') {
							$sql = ' SELECT * FROM ' .$tb_prova. ' WHERE '.$tipo.' like "'.$de.'%" ORDER BY ' .$escolha;
						}

							$result = mysqli_query($conexao, $sql);
							while ($row = mysqli_fetch_array($result)){ 
								$soma = $soma + $row[5];
								echo "<tr>
								<td>".$row[0]."</td>
								<td>".$row[1]."</td>
								<td>".$row[2]."</td>
								<td>".date('d/m/Y', strtotime(str_replace("/", "-", $row[3])))."</td>
								<td>".$row[4]."</td>
								<td>".$row[5]."</td>
								<td><a href=javascript:excluirRegistro('acao.php?acao=excluir&codigo=$row[0]&tabela=$tb_prova&pagina=prova2.php')><img src='img/excluir.jpg' width='20px'/></a></td>
											</tr>";

							}  ?>

							<?php	
				echo "<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>".$soma."</td>
					<td><a></a></td>
				</tr>"
				?>
				</table>
			</fieldset>
		</center>

	</form>
	
</body>
</html>


