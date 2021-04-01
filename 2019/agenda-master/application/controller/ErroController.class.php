<?php
/**
 * Description of ErroController
 *
 * @author Alan
 */
class ErroController extends Controller
{
    public function __construct()
    {
        $this->view = new ErroView();
    }
    
    public function show()
    {
        $this->view->assign("title", "Página não encontrada");
        $this->view->assign("text", "Não foi possivel encontrar a página solicitada.<br />
            Desculpe o encomodo. Estamos trabalhando para corrigir esse incoveniente<br />
            <a href='http://localhost/agenda/'>Click aqui</a> para voltar para página inicial.");
        parent::show();
    }
}

?>
