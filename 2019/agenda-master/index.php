<?php
session_start();
// Inclui o arquivo com as configurações do sistema
require_once './application/config/config.inc.php';

if (empty($_SESSION['login']) && empty($_SESSION['nome']))
{
    if (!empty($_GET['k']))
    {
        $url = explode ('/', $_GET['k']);
    }
    
    $home = new LoginController();
    
    if (@$url[1])
    {
        $home->$url[1]();
    }
    
    $home->show();
}
else
{
    // Verifica se foi passa alguma coisa pela URL
    if (isset($_GET['k']) && strlen($_GET['k']) > 0)
    {
        // Separa a url em class, método e parametro
        // Exemplo: site.com/classe/método/parametro/parametro
        $url = explode('/', $_GET['k']);

        // Separa a classe
        $class = empty($url[0])? NULL: (string) $url[0]. 'Controller';
        // Separa o método
        $method = empty($url[1])? NULL: (string) $url[1];
        // Contador para controle dos parametros
        $i = 0;

        // Percorre o vetor para pegar os parametros
        foreach ($url as $value)
        {
            // Só pega os valores referentes a parametros
            // Exemplo: site.com/class/método/parametro/parametro
            if ($i > 1)
            {
                $param[] = $value;
            }
            $i++;
        }

        // Verifica se a classe existe!
        if (class_exists($class))
        {
            // Instancia a classe
            $instance = new $class;
            // Verifica se o método existe
            if (method_exists($instance, $method))
            {
                // Verifica quantos parametros foram passador
                // aceitando no máximo 3
                switch (count(@$param))
                {
                    case 1:
                        // Execura o método com 1 parametro
                        $instance->$method($param[0]);
                        break;
                    case 2:
                        // Execura o método com 2 parametros
                        $instance->$method($param[0], $param[1]);
                        break;
                    case 3:
                        // Execura o método com 3 parametros
                        $instance->$method($param[0], $param[1], $param[2]);
                        break;
                    default :                    
                        // Execura o método sem parametros
                        $instance->$method();
                }
            }
            // Se não for passado um método não existente
            // ou não for passado nenhum método,
            // executa o método show() por padrão
            else
            {
                // Imprime o conteúdo da classe por padrão
                $instance->show();
            }
        }
        // Caso não existe a classe passada na URL
        // mostra o erro 404
        else
        {
            // Instancia a Classe com os erros
            $erro = new ErroController();
            // Imprime na tela
            $erro->show();
        }
    }
    // Caso nada tenha sido passado pela UrL, mostra a página inicial
    else
    {
        // Instancia a Classe da página inicial
        $home = new IndexController();
        // Imprime na tela
        $home->show();
    }
}