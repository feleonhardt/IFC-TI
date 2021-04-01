<?php
function preencherFormulario($formulario, $dados){
    foreach ($dados as $chave => $valor) {
        $formulario = str_replace('{'.$chave.'}',$valor,$formulario);
    }
    return $formulario;
}

function criarConexao(){
    require_once('./assets/conf/conf.inc.php');
    try {
        $conexao = new PDO(MYSQL,USER,PASSWORD);
        return $conexao;
    } catch (PDOExeption $e) {
        print('Erro ao conectar com o banco de dados. Favor verificar parâmetros!');
        die();
    }catch(Exeption $e){
        print('Erro genérico. Entre em contato com o administrador do site!');
        die();
    }
}

function preparaComando($sql){
    try {
        $conexao = criarConexao();
        $comando = $conexao->prepare($sql);
        return $comando;
    } catch (Execption $e) {
        print('Erro ao preparar o comando!');
        die();
    }
}

function bindExecute($comando, &$dados){
    try {
        foreach ($dados as $chave => &$valor) {
            $comando->bindParam($chave, $valor);
        }
        $comando = executaComando($comando);
        return $comando;
    } catch (Execption $e) {
        print('Erro ao realizar bind!');
        die();
    }
}

function executaComando($comando){
    try {
        $comando->execute();
        return $comando;
    } catch (Exeption $e) {
        print('Erro ao executar o comando. '.$e->getMessage());
        die();
    }
}
?>
<script>
 function excluir(url) {
     if(confirm("Confirmar exclusão?")){
       location.href=url;
     }
 }
</script>