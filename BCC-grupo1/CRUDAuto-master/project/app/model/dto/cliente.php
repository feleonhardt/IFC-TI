<?php
namespace app\model\dto; 
class Cliente { 

	private $id;
	private $nome;
	private $cpf;
	private $rg;

	public function getId(){
		return $this->id;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getCpf(){
		return $this->cpf;
	}
	public function getRg(){
		return $this->rg;
	}
	public function setId($id){
		$this->id = $id;
		return $this;
	}
	public function setNome($nome){
		$this->nome = $nome;
		return $this;
	}
	public function setCpf($cpf){
		$this->cpf = $cpf;
		return $this;
	}
	public function setRg($rg){
		$this->rg = $rg;
		return $this;
	}

}
?>