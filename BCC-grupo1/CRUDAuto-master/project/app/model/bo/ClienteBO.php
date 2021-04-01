<?php

namespace app\model\bo;
use app\interfaces\IDAO;
use app\model\dao\ClienteDAO;
use app\model\dto\Cliente;

class ClienteBO{
	private $clienteDAO;
	public function __construct($clienteDAO){
		$this->clienteDAO = $clienteDAO;
	}
	public function insert($cliente){
		return $this->clienteDAO->insert($cliente);
	}
	public function update($cliente){
		return $this->clienteDAO->update($cliente);
	}
	public function delete($cliente){
		return $this->clienteDAO->delete($cliente);
	}
	public function findAll(){
		return $this->clienteDAO->findAll();
	}
	public function findById($cliente){
		return $this->clienteDAO->findById($cliente);
	}
}
?>