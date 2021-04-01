<?php

/**
 * Classe Controller
 * Cria uma abstração para gerenciar a
 * junção da camada de visualização e a cadamade de persistência
 * @author Alan
 */
class Controller
{
    /**
     * Recebe um objeto tipo View
     * @var View 
     */
    protected $view;
    
    /**
     * Recebe um objeto tipo Model
     * @var Model
     */
    protected $model;
    
    /**
     * Método show
     * Imprime o conteúdo na tela
     */
    public function show()
    {
        // Executa o método show do objeto View
        $this->view->show();
    }
}

?>
