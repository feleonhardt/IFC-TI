<?php
/**
 * Description of LoginController
 *
 * @author Alan
 */
class LoginController extends Controller
{
    private $teste = false;
    
    public function __construct() {
        $this->view = new LoginView();
        $this->model = new LoginModel();
    }
    
    public function logar()
    {
        if (!empty($_POST['email']) && !empty($_POST['senha']))
        {
            $this->model->setEmail($_POST['email']);
            $this->model->setSenha($_POST['senha']);
            $obj = $this->model->getLogin();
            
            if (!empty($obj))
            {
                $_SESSION['nome'] = $obj['usu_nome'];
                $_SESSION['email'] = $obj['usu_email'];
                $_SESSION['id'] = $obj['usu_id'];
                
                header('Location: //localhost/agenda/');
            }
            else
            {
                $this->teste = '<strong>Email</strong> ou <strong>Senha</strong> incorretos';
            }
        }           
    }
    
    public function logout()
    {
        unset($_SESSION);
        session_unset();
        session_destroy();
            
        header('Location: //localhost/agenda/');
    }
    
    public function show()
    {        
        $this->view->assign('status', $this->teste);
        $this->view->assign('patternSenha', '{6,}');
        parent::show();
    }
}

?>
