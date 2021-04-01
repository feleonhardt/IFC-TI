var Pessoa = /** @class */ (function () {
    function Pessoa(nome, sobrenome, cpf, rg, dataNascimento) {
        this.nome = nome;
        this.sobrenome = sobrenome;
        this.cpf = cpf;
        this.rg = rg;
        this.dataNascimento = dataNascimento;
    }
    Pessoa.prototype.identificaPessoa = function () {
        console.log(this.nome + " " + this.sobrenome + ", nascido(a) em " + this.dataNascimento + " e registrado(a) sob o CPF n\u00BA " + this.cpf + " e RG n\u00BA " + this.rg);
    };
    return Pessoa;
}());
var pessoa = new Pessoa('Felipe André', 'Leonhardt', 34553434534, 6876345, '26-04-2002');
pessoa.identificaPessoa();
