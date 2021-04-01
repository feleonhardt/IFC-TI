<?php
/**
 * Description of IndexController
 *
 * @author Alan
 */
class IndexController extends Controller
{
    public function __construct()
    {
        $this->view = new IndexView();
    }
    
    public function show() {        
        $this->view->assign('status', "teste");
        $this->view->assign('patternSenha', '{6,}');
        parent::show();
    }
}

?>
