<!DOCTYPE html>
<?php
	include 'connect/connect.php';
	$title = "Twitter";
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
    <meta charset="UTF-8" />
    <title>(3)Twitter</title>
    <link rel="stylesheet" href="css/estilo7.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="shortcut icon" href="img/twitter.png" type="image/x-icon" />
</head>
<body>

<div class="barra">
	<form method="post">
	⠀<img src="img/home.png" width="17"> <b id="home">Home</b> ⠀⠀
	<img src="img/moments.png" width="17"> <b>Moments</b> ⠀⠀
	<img src="img/notifications.png" width="17"> <b>Notifications</b> ⠀⠀
	<img src="img/messages.png" width="17"> <b>Messages</b>  ⠀⠀⠀⠀ ⠀⠀⠀⠀⠀  ⠀
	<img src="img/twitter.png" width="25">  ⠀⠀⠀⠀⠀         ⠀⠀⠀  ⠀ ⠀ ⠀⠀⠀ ⠀
	<input type="text" id="texto" name="pesquisar" value="<?php echo $pesquisar ?>"/>
	<button id="btnLupa"><img src="img/lupa.png" width="20"></button> ⠀
	<img src="img/usuario.png" width="25"> ⠀
	<button id="btnTwitter">Tweet</button>
	<br>⠀⠀⠀⠀          ⠀⠀⠀  ⠀ ⠀ ⠀⠀⠀ ⠀⠀⠀⠀⠀⠀⠀         ⠀⠀⠀  ⠀ ⠀ ⠀⠀⠀ ⠀⠀⠀⠀⠀⠀⠀         ⠀⠀⠀  ⠀ ⠀ ⠀⠀⠀ ⠀⠀⠀⠀⠀⠀⠀         ⠀⠀⠀  ⠀ ⠀ ⠀⠀⠀ ⠀        ⠀ ⠀⠀⠀⠀
	<input type="radio" name="pesquisa" <?php if($pesquisa == "usuario") echo "checked"; ?> value="usuario">Usuário
	<input type="radio" name="pesquisa" <?php if($pesquisa == "data") echo "checked"; ?> value="data">Data
	<input type="radio" name="pesquisa" <?php if($pesquisa == "texto") echo "checked"; ?> value="texto">Texto
</form>
</div>

<?php
	if($pesquisa == ''){
		$sql = 'SELECT * FROM '.$tb_twitter;
	}
	else{
		if($pesquisa == "usuario"){
			$sql = "SELECT * FROM ".$tb_twitter." WHERE usuario LIKE '".$pesquisar."%' ORDER BY usuario";
		}
		elseif($pesquisa == "texto"){
			$sql = "SELECT * FROM ".$tb_twitter." WHERE texto LIKE '%".$pesquisar."%' ORDER BY texto";
		}
		elseif ($pesquisa == "data") {
			$pesquisar = str_replace('/', '-', $pesquisar);
			$sql = "SELECT * FROM ".$tb_twitter." WHERE dataPublicacao = date('".date('Y-m-d', strtotime($pesquisar))."') ORDER BY dataPublicacao";
		}
	}

	$result = mysqli_query($conexao,$sql);
?>

<div class="perfil">
</div>
<div class="perfil2">
	<table>
		<tr>
			<td><img src="img/fotoperfil.png" width="60"></td>
			<td><strong>⠀juh_krambeck</strong><br>
			    ⠀<b id="usuario">@KrambeckJuh</b>
		</tr>
	</table>
	<b id="topicos">⠀Tweets  ⠀⠀⠀⠀⠀⠀⠀     ⠀⠀Following</b><br>
	<b id="numeros">⠀0  ⠀⠀⠀⠀⠀⠀⠀    	31</b>
</div>

<div class="trends">
	<strong>Trends for you</strong> . <b id="change"> Change</b>
	<br><br>
	<b class="nome">Lula</b>
	<p class="tweet">Desembargador do TRF-4 manda soltar Lula; Moro diz que não vai cumprir decisão</p>
	<br>
	<b class="nome">#WorldCup</b>
	<p class="tweet">639K Tweets</p>
	<br>
	<b class="nome">Tailândia</b>
	<p class="tweet">Equipes iniciam resgate de meninos presos em caverna na Tailândia</p>
</div>

<div class="twittar">
	<table>
		<tr>
			<td>⠀⠀<img src="img/usuario.png" width="25"></td>
			<td>⠀<button id="twitar">What's happening?</button> <img src="img/galeria.png" width="25"></td>
		</tr>
	</table>
</div>

<div class="home">
	<?php
		while ($row = mysqli_fetch_array($result)){
			echo "<strong class='nomeUsuario'>".$row[1]."</strong>⠀.⠀";
			echo "<strong class='data'>".date('d/m/Y', strtotime(str_replace('/','-', $row[2])))."</strong>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀<img src='img/seta.png' width = '15'><br>";
			echo "<p>".$row[3]."</p>";
			echo "<img src='img/comentario.png' width = '15'>⠀<strong class='notificacoes'>".$row[4].
				          "⠀⠀⠀⠀"."<img src='img/rt.png' width = '15'>⠀".
				          $row[5]."⠀⠀⠀⠀"."<img src='img/like.png' width = '15'>⠀".
				          $row[6]."</strong>";
			echo "<hr>";
		}
	?>
</div>

<div class="follow">
	<strong>Who to Follow</strong> . <b id="change"> Refresh</b> . <b id="change"> View all</b>
	<br><br>
	<table>
		<tr>
			<td><img src="img/crianca.png" width="50"></td>
			<td><strong id="pagina">Coisas de criança</strong> <img src="img/checked.png" width="10"><br><strong id="pagina2"> @CoisasCriancas</strong></td>
			<td>⠀⠀<button id="btnFollow">Follow</button></td>
		</tr>
	</table>
	<hr>
	<table>
		<tr>
			<td><img src="img/viagens.png" width="50"></td>
			<td><strong id="pagina">Tudo de Viagens</strong> <img src="img/checked.png" width="10"><br><strong id="pagina2"> @ViagensTudo</strong></td>
			<td>⠀⠀<button id="btnFollow">Follow</button></td>
		</tr>
	</table>
	<hr>
	<table>
		<tr>
			<td><img src="img/redacao.png" width="50"></td>
			<td><strong id="pagina">Redação ENEM</strong> <img src="img/checked.png" width="10"><br><strong id="pagina2"> @EnemRedacao</strong></td>
			<td>⠀⠀⠀<button id="btnFollow">Follow</button></td>
		</tr>
	</table>
	<hr>
	<table>
		<tr>
			<td><img src="img/outlook.png" width="30"></td>
			<td><strong id="find">Find people you know</strong> <br><strong id="pagina2">Import your contacts from Outlook</strong></td>
		</tr>
	</table>
	<hr>
	<b id="change"> Connect other address books</b>
</div>

<div class="twitter">
	<p class="tweet">© 2018 Twitter About Help Center Terms Privacy policy Cookies Ads info Brand Blog Status Apps Jobs Marketing Businesses Developers</p>
	<hr>
	<img src="img/seta.svg" width="12"> <b id="change"> Advertise with Twitter</b>
</div>

</body>
</html>