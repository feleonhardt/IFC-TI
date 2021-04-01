<?php

function apresentar(){
		$json= json_decode(file_get_contents("cadastro.json"));
		if (!empty($json)) {
			for($i=0;$i<count($json);$i++){
				echo "<tr>";
	            foreach ($json[$i] as $index => $ap) {
	                   echo "<td>".$ap."</td>";
	        	 }
						 ?>
						 		<td>
					         <button class="waves-effect waves-light modal-trigger green-text" name="altera" id="altera" value="<?php echo $i; ?>"><i class="material-icons">create</i></button>
								</td>
						<?php
						//AlterarCSS($i);
        	 	ExcluirCSS();
				echo "</tr>";
			}
		}
}

function alterar($altera){
		  $json= json_decode(file_get_contents("cadastro.json"));
		  for ($i=0; $i < count($json) ; $i++) {
		    if ($i == $altera) {
		      echo "<tr>";
		        echo "<td><input type='text' name='novo_nome' value='".$json[$i]->nome."'></td>";
		        echo "<td><input type='text' name='novo_telefone' value='".$json[$i]->telefone."'></td>";
		        echo "<td><input type='text' name='novo_email' value='".$json[$i]->email."'></td>";
		        echo "<td><input type='date' name='novo_nascimento' value='".$json[$i]->datadenascimento."'></td>";
		        echo '<td><button class="waves-effect waves-light modal-trigger green-text" name="salva" id="salva" value="'.$i.'"><i class="material-icons">send</i></button></td>';
						echo '<td><button class="waves-effect waves-light modal-trigger red-text"><i class="material-icons">close</i></button></td>';
		      echo "</tr>";
		    }else {
					echo "<tr>";
		            foreach ($json[$i] as $index => $ap) {
		                   echo "<td>".$ap."</td>";
		        	 }
							 ?>
							 		<td>
						         <button class="waves-effect waves-light modal-trigger green-text" name="altera" id="altera" value="<?php echo $i ; ?>"><i class="material-icons">create</i></button>
									</td>
							<?php
							//AlterarCSS($i);
	        	 	ExcluirCSS();
					echo "</tr>";
		    }
		  }
}

function salvaAlteracao($salva, $novo_nome, $novo_email, $novo_telefone, $novo_nascimento){
			$json= json_decode(file_get_contents("cadastro.json"));
		  $alterado = array(
		      'nome'       => $novo_nome,
		      'telefone'   => $novo_telefone,
		      'email'      => $novo_email,
		      'datadenascimento' => $novo_nascimento
		  );
		  $json[$salva] = $alterado;
			$dados_json = json_encode($json);
		  $fp = fopen("cadastro.json", "w");
		  $escreve = fwrite($fp, $dados_json);
		  fclose($fp);
}

function Search($find){
   	echo "<center><h3>Pesquisado</h3></center>";
		$array = json_decode(file_get_contents("cadastro.json"));
			for($n = 0; $n < count($array); $n++)
				foreach($array[$n] as $value => $i)
					if(stripos($i, $find) != false){
							echo "<table><tr>";
							foreach($array[$n] as $value => $i)
								echo "<td>".$i."</td>";
							}
							echo "</tr></table>";
}

function AlterarCSS($num){
	?>
	<td colspan="1">
        <button class="waves-effect waves-light modal-trigger green-text" name="alterar" id="alterar" value="<?php //echo $num; ?>"><i class="material-icons">create</i></button>
				 <div id="alterar1" class="modal">
						 <div class="modal-content">
								 <center>
										 <h4>Alterar</h4>
											  <form action="" method="post">
												 <div class="input-field col s12">
													 <?php //echo $num; ?>
															 <input id="nome" type="text" name="nome" />
															 <label for="nome">Nome</label>
												 </div>
												 <div class="input-field col s12">
															 <input id="email" type="text" name="email" />
															 <label for="sigla">E-mail</label>
												 </div>
												 <div class="input-field col s12">
															 <input id="telefone" type="text" name="telefone" />
															 <label for="nome">Telefone</label>
												 </div>
												 <div class="input-field col s12">
															<input id="datadenascimento" type="date" name="datadenascimento" />
															<label for="nome">Data de Nascimento</label>
												 </div>
												 <center>
															<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
															<button class="waves-effect waves-green btn-flat black-text" name="acao" value="alterar"><i class="material-icons right">send</i>Alterar</button>
												 </center>
											 </form>
								 </center>
							</div>
				 </div>
		</td>
    <?php
}

function ExcluirCSS(){
	?>
	<td>
        <a class="waves-effect waves-light modal-trigger red-text" href="#excluir1"><i class="material-icons">delete</i></a>
            <div id="excluir1" class="modal" style="width: 350px;">
                <div class="modal-content">

                    <center>
                        <h4>Confirmar Exclusão!</h4>
                        	<p>Deseja realmente excluir esse registro?<br />Essa operação não poderá ser desefeita</p>
                            	<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
                                <a href="#!&excluir=" class="modal-action waves-effect waves-teal btn-flat">Confirmar</a>
                                <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
                                    <button class="waves-effect waves-green btn-flat black-text" name="acao" value="excluir"><i class="material-icons right">send</i>Inserir</button>
                    </center>
                </div>
            </div>
    </td>
	<?php
}

function Inserir(){
	?>
	<tr>
      <td colspan="4"></td>
       <td><b>Adicionar</b></td>
        <td>
        <a class="waves-effect waves-light modal-trigger orange-text" href="#inserir"><i class="material-icons">add_circle_outline</i></a>
        <div id="inserir" class="modal">
            <div class="modal-content">
                <center>
                    <h4>Inserir</h4>
                    <form action="" method="post">
                        <div class="input-field col s12">
                            <input id="nome" type="text" name="nome" />
                            <label for="nome">Nome</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="email" type="text" name="email" />
                            <label for="sigla">E-mail</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="telefone" type="text" name="telefone" />
                            <label for="nome">Telefone</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="datadenascimento" type="date" name="datadenascimento" />
                            <label for="nome">Data de Nascimento</label>
                        </div>
                        <center>
                            <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
                            <button class="waves-effect waves-green btn-flat black-text" name="acao" value="inserir"><i class="material-icons right">send</i>Inserir</button>
                        </center>
                    </form>
                </center>
            </div>
        </div>
       </td>
     </tr>
	<?php
}
?>
