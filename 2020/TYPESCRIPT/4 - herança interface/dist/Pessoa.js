"use strict";
exports.__esModule = true;
exports.Pessoa = void 0;
var Pessoa = /** @class */ (function () {
    function Pessoa(nome, sobrenome, dataNascimento, cpf, endereço) {
        this.nome = nome;
        this.sobrenome = sobrenome;
        this.dataNascimento = dataNascimento;
        this.cpf = cpf;
        this.endereço = endereço;
    }
    Pessoa.prototype.fala = function () {
        console.log(this.nome + " " + this.sobrenome + " falou!");
    };
    Pessoa.prototype.anda = function () {
        console.log(this.nome + " " + this.sobrenome + " andou!");
    };
    Pessoa.prototype.ouve = function () {
        console.log(this.nome + " " + this.sobrenome + " ouviu!");
    };
    return Pessoa;
}());
exports.Pessoa = Pessoa;
