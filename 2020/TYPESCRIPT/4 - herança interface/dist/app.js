"use strict";
exports.__esModule = true;
var Pessoa_1 = require("../dist/Pessoa");
var Pessoa_variacao_1 = require("../dist/Pessoa-variacao");
var pessoa = new Pessoa_1.Pessoa('Ciclano', 'Silva', '07-07-1990', 19876543366, 'Rio do Sul');
pessoa.fala();
pessoa.ouve();
var aluno = new Pessoa_variacao_1.Aluno('Felipe André', 'Leonhardt', '26-04-2002', 34579623490, 'Braço do Trombudo', 86645, 'IFC', 'Ensino Médio', 3);
aluno.aprende();
