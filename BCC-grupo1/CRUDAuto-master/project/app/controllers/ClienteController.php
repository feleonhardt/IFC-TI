<?php

namespace app\controllers;
use core\AbsController;
use core\Redirector;
use app\model\dao\ClienteDAO;
use app\model\bo\ClienteBO;
use app\model\dto\Cliente;

class ClienteController extends AbsController{
	
	public function findAll(){
		$clienteDAO = new ClienteDAO();
		$clienteBO = new ClienteBO($clienteDAO);
		$obj = $clienteBO->findAll();
		$this->view->cliente = $obj;
		$this->requestView('cliente/index', 'baseHtml');
	}
	public function cadastrar(){
		$this->requestView('cliente/insert' , 'baseHtml');
	}
	public function visualizar($id){
		$this->requestView('cliente/update' , 'baseHtml');
	}
	public function insert($request){
		$clienteDAO = new ClienteDAO();
		$clienteBO = new ClienteBO($clienteDAO);
		$cliente = (new Cliente())->setId($request->post->id)
		->setNome($request->post->nome)
		->setCpf($request->post->cpf)
		->setRg($request->post->rg);
		$clienteBO->insert($cliente);
		Redirector::toRoute('/cliente');
	}
	public function delete($id){
		$clienteDAO = new ClienteDAO();
		$clienteBO = new ClienteBO($clienteDAO);
		$cliente = (new Cliente())->setId($id);
		$clienteBO->delete($cliente);
		Redirector::toRoute('/cliente');
	}
	public function update($id, $request){
		$clienteDAO = new ClienteDAO();
		$clienteBO = new ClienteBO($clienteDAO);
		$cliente = (new Cliente())->setId($id);
		$obj = $clienteBO->findById($cliente)[0];
		$obj->setId($request->post->id)
		->setNome($request->post->nome)
		->setCpf($request->post->cpf)
		->setRg($request->post->rg);
		$clienteBO->update($obj);
		Redirector::toRoute('/cliente');
	}
	public function findById($id){
		$clienteDAO = new ClienteDAO();
		$clienteBO = new ClienteBO($clienteDAO);
		$cliente = (new Cliente())->setId($id);
		$obj = $clienteBO->findById($cliente);
		$this->view->cliente = $obj;
		$this->requestView('cliente/update', 'baseHtml');
	}
}
?>