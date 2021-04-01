<?php

require_once('carro.class.php');
require_once('detran.class.php');
require_once('gerenciador.class.php');
require_once('prototipo.class.php');
require_once('registro.class.php');
require_once('usuario.class.php');

$carro = new Carro();
$carro->modelo = 'hatch';
$carro->cor = '#FFFFFF';
var_dump($carro);

$detran = new Detran();
$detran->codigo = '353353';
$detran->nome = '13° Detran de SC';
var_dump($detran);

$gerenciador = new Gerenciador();
$gerenciador->codigo = '978984';
$gerenciador->nome = 'Felipe André Leonhardt';
var_dump($gerenciador);

$prototipo = new Prototipo();
$prototipo->codigo = '776378';
$prototipo->telefone = '(47) 9 9644-3433';
var_dump($prototipo);

$registro = new Registro();
$registro->codigo = '2';
$registro->placa = 'FFF-9999';
var_dump($registro);

$usuario = new Usuario();
$usuario->codigo = '44';
$usuario->nome = 'Ciclano da Silva';
var_dump($usuario);


?>