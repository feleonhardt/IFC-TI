<?php
/**
 * Description of LoginModel
 *
 * @author Alan
 */
class LoginModel extends Model
{
    private $id;
    private $email;
    private $senha;
    
    private $entity;
    
    public function __construct()
    {
        parent::__construct();
        $this->entity = '`usuario`';
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getLogin()
    {
        if (!empty($this->email) && !empty($this->senha))
        {
            $this->instruction = 'SELECT * FROM ' . $this->entity .
                                 ' WHERE usu_email = :email AND usu_senha = PASSWORD(:senha) LIMIT 0 , 1';

            $str = $this->connection->prepare($this->instruction);

            $str->bindValue(':email', $this->email, PDO::PARAM_STR);
            $str->bindValue(':senha', $this->senha, PDO::PARAM_STR);

            
            $this->connection->beginTransaction();
            $str->execute();
            $this->connection->commit();
            
            $row = $str->fetch(PDO::FETCH_ASSOC);
            
            return $row;
        }
    }
}

?>
