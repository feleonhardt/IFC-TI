import {Pessoa} from '../dist/Pessoa';
import {Aluno} from '../dist/Pessoa-variacao';

let pessoa = new Pessoa('Ciclano', 'Silva', '07-07-1990', 19876543366, 'Rio do Sul');
pessoa.fala();
pessoa.ouve();
let aluno = new Aluno('Felipe André', 'Leonhardt', '26-04-2002', 34579623490, 'Braço do Trombudo', 86645, 'IFC', 'Ensino Médio', 3);
aluno.aprende();