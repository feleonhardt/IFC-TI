class Pessoa{
    nome: string;
    sobrenome : string;
    dataNascimento : string;
    cpf : number;
    endereço : string;
    constructor (nome : string, sobrenome : string, dataNascimento : string, cpf : number, endereço : string){
        this.nome = nome;
        this.sobrenome = sobrenome;
        this.dataNascimento = dataNascimento;
        this.cpf = cpf;
        this.endereço = endereço;
    }
    fala(){
        console.log(`${this.nome} ${this.sobrenome} falou!`);
    }
    anda(){
        console.log(`${this.nome} ${this.sobrenome} andou!`);
    }
    ouve(){
        console.log(`${this.nome} ${this.sobrenome} ouviu!`);
    }
}


interface Ocupado{
    ocupaçao : string;
}

export {Pessoa, Ocupado};
