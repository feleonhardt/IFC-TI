import {Pessoa, Ocupado} from '../dist/Pessoa';

export class Aluno extends Pessoa implements Ocupado{
    ocupaçao : string;
    matricula : number;
    escola : string;
    grau : string;
    turma : number;
    constructor(protected nome : string, protected sobrenome : string, dataNascimento : string, cpf : number, endereço : string, matricula : number, escola : string, grau : string, turma : number){
        super(nome, sobrenome, dataNascimento, cpf, endereço);
        this.ocupaçao = 'Estudando';
        this.matricula = matricula;
        this.escola = escola;
        this.grau = grau;
        this.turma = turma;
    }
    aprende(){
        super.ouve();
        super.fala();
        console.log(`${this.nome} ${this.sobrenome} aprendeu!`);
    }
}
