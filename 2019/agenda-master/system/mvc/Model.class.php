<?php
/**
 * Description of Model
 *
 * @author Alan
 */
class Model
{
    /**
     * Recebe uma conexão com banco de dados
     * @var Conexao
     */
    protected $connection;
    
    /**
     * Recebe um instrução SQL
     * @var string
     */
    protected $instruction;
    
    /**
     * Guarda o status da transação
     * como verdadeira ou falso
     * @var boolean
     */
    private $status;

    /**
     * Método Construtor
     * Cria uma conexão com o banco de dados
     */
    public function __construct()
    {
        // Inicia a conexão
        $this->connection = Conexao::getInstance();
        // Coloca a transação como não realizada
        $this->status = FALSE;
    }
    
    /**
     * Método commit
     * Executa a transação com o banco de dados
     */
    public function execute()
    {
        // Inicia um bloco de excessão
        try
        {
            // Inicia a transação
            $this->connection->beginTransaction();
            // Executa a transação
            $this->connection->execute();
            // Finaliza a transação
            $this->connection->commit();
            // Seta a transação com executada
            $this->status = TRUE;
        }
        // Caso haja um erro na transação
        catch (Exception $exc)
        {
            // Imprime o erro na tela do display
            echo '<div class="alert">';
            echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
            echo 'ERRO:' . $exc->getTraceAsString() . '</div>';
        }
    }
    
    public function getStatus()
    {
        return $this->status;
    }
}

?>
