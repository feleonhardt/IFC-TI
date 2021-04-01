<?php
namespace app\model\dao; 
use app\model\dto\Cliente;
use app\conexao\Conexao;
use app\interfaces\IDAO;
use PDO;

class ClienteDAO extends Conexao implements IDAO{
	public function insert($object){
		$stmt = $this->getPdo()->prepare("INSERT INTO cliente
										(id, nome, cpf, rg)
										VALUES (:id, :nome, :cpf, :rg)");
		$stmt->bindParam(":id", $id, PDO::PARAM_STR);
		$stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
		$stmt->bindParam(":cpf", $cpf, PDO::PARAM_STR);
		$stmt->bindParam(":rg", $rg, PDO::PARAM_STR);

		$id = $object->getId();
		$nome = $object->getNome();
		$cpf = $object->getCpf();
		$rg = $object->getRg();

		$stmt->execute();
	}
	public function findAll(){
		try{
			$query = $this->getPdo()->query("SELECT * FROM cliente;");
			$array = array();
			while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
				$cliente = (new Cliente())->setId($result['id'])
->setNome($result['nome'])
->setCpf($result['cpf'])
->setRg($result['rg']);
				array_push($array, $cliente);
			}
			return $array;
		} catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}
	public function update($object){
		try{
			$stmt = $this->getPdo()->prepare("UPDATE cliente SET nome = :nome, cpf = :cpf, rg = :rg
						 WHERE id = :id");
			$stmt->bindParam(":id", $id, PDO::PARAM_STR);
			$stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
			$stmt->bindParam(":cpf", $cpf, PDO::PARAM_STR);
			$stmt->bindParam(":rg", $rg, PDO::PARAM_STR);

			$id = $object->getId();
			$nome = $object->getNome();
			$cpf = $object->getCpf();
			$rg = $object->getRg();

			$stmt->execute();
		} catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}
	public function delete($objeto){
		try{
			if ($objeto instanceof cliente) {
				$stmt = $this->getPdo()->prepare("DELETE FROM cliente WHERE id = :id");
				$stmt->bindParam(":id", $id, PDO::PARAM_STR);

				$id = $objeto->getId();

				$stmt->execute();
			}
		} catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}
	public function findById($objeto){
		$stmt = $this->getPdo()->prepare("SELECT * FROM cliente WHERE id = :id;");
		$stmt->bindParam(':id', $id);
		$id = $objeto->getId(); 
		$stmt->execute();
		while ($obj = $stmt->fetch(PDO::FETCH_ASSOC)){
			$r[] = (new Cliente())->
			setId($obj['id'])
			->setNome($obj['nome'])
			->setCpf($obj['cpf'])
			->setRg($obj['rg']);
		}
		return $r;
	}
	}
?>