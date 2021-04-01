<?php
  include("conexao.php");

  $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
  $nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : null;
  $email = isset($_POST['email']) ? $_POST['email'] : null;
  $login = isset($_POST['login']) ? $_POST['login'] : null;
  $confirmar_senha1 = isset($_POST['confirmar_senha1']) ? $_POST['confirmar_senha1'] : null;
  $confirmar_senha2 = isset($_POST['confirmar_senha2']) ? $_POST['confirmar_senha2'] : null;
  if ($confirmar_senha1 == $confirmar_senha2) {
    $senha = $confirmar_senha1;
  }else {
    $senha = null;
  }
  $confirmar = isset($_POST['confirmar']) ? $_POST['confirmar'] : null;

  $novos_campos = array('nome', 'login', 'senha', 'data_nascimento', 'email');
  $novo_nome = isset($_POST['novo_nome']) ? $_POST['novo_nome'] : null;
  $novo_nascimento = isset($_POST['novo_data_nascimento']) ? $_POST['novo_data_nascimento'] : null;
  $novo_email = isset($_POST['novo_email']) ? $_POST['novo_email'] : null;
  $novo_login = isset($_POST['novo_login']) ? $_POST['novo_login'] : null;
  $novo_senha = isset($_POST['novo_senha']) ? $_POST['novo_senha'] : null;
  if ($confirmar!=null) {
    $sql = $pdo->prepare("UPDATE usuarios SET nome = :nome, data_nascimento = :data_nascimento, email = :email, login = :login, senha = :senha WHERE codigo = :codigo;");
    $sql->bindValue(':nome', $novo_nome);
    $sql->bindValue(':data_nascimento', $novo_nascimento);
    $sql->bindValue(':email', $novo_email);
    $sql->bindValue(':login', $novo_login);
    $sql->bindValue(':senha', $novo_senha);
    $sql->bindValue(':codigo', $confirmar);
    $sql->execute();
  }



  $excluir = isset($_POST['excluir']) ? $_POST['excluir'] : null;
  if ($excluir!=null) {
    $exclui = $pdo->prepare("DELETE FROM usuarios WHERE codigo = :codigo;");
    $exclui->bindValue(':codigo', $excluir);
    $exclui->execute();
  }
  $alterar = isset($_POST['alterar']) ? $_POST['alterar'] : null;
 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
   <head>
     <meta charset="utf-8">
     <title>INSERT</title>
   </head>
   <body>
     <center>
       <form action="" method="post">
         Nome: <input type="text" name="nome" value=""><br>
         Data de nascimento: <input type="date" name="data_nascimento" value=""><br>
         E-mail: <input type="email" name="email" value=""><br>
         Login: <input type="text" name="login" value=""><br>
         Senha: <input type="password" name="confirmar_senha1" value=""><br>
         Confirmar senha: <input type="password" name="confirmar_senha2" value=""><br>
         <button type="submit" name="button">CADASTRAR</button>
       </form>
       <form action="" method="post">
       <?php
       if ($nome != null and $nascimento != null and $email != null and $login != null and $senha != null) {
         $sql = $pdo->prepare("INSERT INTO usuarios (nome, data_nascimento, email, login, senha) VALUES (:nome, :data_nascimento, :email, :login, :senha);");
         $sql->bindValue(':nome', $nome);
         $sql->bindValue(':data_nascimento', $nascimento);
         $sql->bindValue(':email', $email);
         $sql->bindValue(':login', $login);
         $sql->bindValue(':senha', $senha);

         $sql->execute();

       }else if($excluir==null and $alterar ==null and $confirmar==null){
         echo "<br><br>PREENCHA TODOS OS CAMPOS CORRETAMENTE!";
       }
       echo "<br><br>";
       echo "<table border='1 px'>";
       echo "<tr>";
       $consulta = $pdo->query("DESC usuarios;");
       $colunas = array();
       while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
         echo "<th>{$linha['Field']}</th>";
         $colunas[] = $linha['Field'];
       }
       echo "<th>Ação</th>";
       echo "</tr>";
       $cont=1;
       $consulta = $pdo->prepare("SELECT * FROM usuarios");
       $consulta->execute();
       while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
         if ($linha['codigo'] != $alterar) {
           echo "<tr>";
           echo "<td>".$cont."</td>";
           for ($i=1; $i < count($colunas)  ; $i++) {
             echo "<td>".$linha[$colunas[$i]]."</td>";
           }
           echo "<td><button type='submit' name='excluir' value='".$linha['codigo']."'>EXCLUIR</button><button type='submit' name='alterar' value='".$linha['codigo']."'>ALTERAR</button></td>";
           echo "</tr>";
         }else{
           echo "<tr>";
           echo "<td>".$cont."</td>";
           for ($i=1; $i < count($colunas)  ; $i++) {
             echo "<td><input type='";
             if ($novos_campos[($i-1)]=='data_nascimento') {
               echo "date";
             }else if ($novos_campos[($i-1)]=='email') {
               echo "email";
             }else {
               echo "text";
             }
             echo "' name='novo_".$novos_campos[($i-1)]."' value='".$linha[$colunas[$i]]."'></td>";
           }
           echo "<td><button type='submit' name='excluir' value='".$linha['codigo']."'>EXCLUIR</button><button type='submit' name='confirmar' value='".$linha['codigo']."'>CONFIRMAR</button></td>";
           echo "</tr>";
         }
         $cont++;
       }
       echo "</table>";
       ?>
     </form>
     </center>
   </body>
 </html>
