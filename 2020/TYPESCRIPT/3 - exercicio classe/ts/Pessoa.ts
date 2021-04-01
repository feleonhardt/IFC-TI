class Pessoa{
    nome: string;
    sobrenome : string;
    cpf : number;
    rg : number;
    dataNascimento : string;
    constructor (nome : string, sobrenome : string, cpf : number, rg : number, dataNascimento : string){
        this.nome = nome;
        this.sobrenome = sobrenome;
        this.cpf = cpf;
        this.rg = rg;
        this.dataNascimento = dataNascimento;
    }
    identificaPessoa(){
        console.log(`${this.nome} ${this.sobrenome}, nascido(a) em ${this.dataNascimento} e registrado(a) sob o CPF nº ${this.cpf} e RG nº ${this.rg}`);
    }
}

let pessoa = new Pessoa('Felipe André', 'Leonhardt', 34553434534, 6876345, '26-04-2002');
pessoa.identificaPessoa();