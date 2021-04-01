<?php

/**
 * Classe View
 * Cria uma abstração para gerenciamento de templates
 * @author Alan
 */
class View
{
    /**
     * Atributo que recebe a instancia da biblioteca Smarty
     * @var Smarty
     */
    protected $smarty;
    
    /**
     * Atributo que recebe o conteúdo para impressão na tela
     * dentro da parte de conteúdo do template principal
     * @var String
     */
    private $template;
    
    /**
     * Método construtor
     * Instância a biblioteca Smarty
     */
    public function __construct()
    {
        // Instancia a biblioteca Smarty
        $this->smarty = new Smarty();                
        // Define os valores padrão para diretorios do Smarty
        
        // Ativa ou desativa o debugador
        //$this->smarty->debugging = true;
        // Ativa ou desativa o cache
        //$this->smarty->caching = true;
        // Atribui o tempo do vida dos arquivos de cache
        //$this->smarty->cache_lifetime = 120;

        // Seta o diretorio dos templates
        $this->smarty->template_dir = './application/view/tpls';
        // Seta o diretório dos arquivos compilados
        $this->smarty->compile_dir  = './application/cache';
        // Seta o diretório dos arquivos de configuração
        $this->smarty->config_dir   = './application/config';
        // Seta o diretório do arquivos de cache
        $this->smarty->cache_dir    = './application/cache';
    }
    
    /**
     * Método assign
     * Associa a variável que esta no template ao valor passado em $value
     * @param string $variable
     * @param string $value
     */
    public function assign ($variable, $value)
    {
        // Faz a associação das variaveis do template ao seu valor
        $this->smarty->assign($variable, $value);
    }
    
    /**
     * Método display
     * Pega a conteúdo do display com todos os valores já passado
     * pelo método assign() e coloca no atributo $template através de um buffer
     * @param template $template
     */
    public function display($template)
    {
        // Inicia o buffer
        ob_start();
        // Imprime o template
        $this->smarty->display($template.'.tpl');
        // Pega o conteúdo impresso e o coloca em $this->template
        $this->template = ob_get_contents();
        // Encerra o baffer e o limpa
        ob_end_clean();
    }
    
    /**
     * Método show()
     * Imprime o conteúdo na tela do dispositivo
     */
    public function show()
    {
        // Verifica se $this->template foi definido
        if (isset($this->template))
        {
            // Associa o conteúdo de $this->template
            // ao local de conteúdo do template principal
            $this->smarty->assign('content', $this->template);
        }
        // Caso não tenha nada em $this->template
        else
        {
            // Coloca "Nenhum conteúdo selecionado!" no local de conteúdo do
            // template principla
            $this->smarty->assign('content', 'Nenhum conteúdo selecionado!');
        }
        
        // Imprime o template principal
        $this->smarty->display('home.tpl');
    }
}

?>
