"use strict";
var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
exports.__esModule = true;
exports.Aluno = void 0;
var Pessoa_1 = require("../dist/Pessoa");
var Aluno = /** @class */ (function (_super) {
    __extends(Aluno, _super);
    function Aluno(nome, sobrenome, dataNascimento, cpf, endereço, matricula, escola, grau, turma) {
        var _this = _super.call(this, nome, sobrenome, dataNascimento, cpf, endereço) || this;
        _this.nome = nome;
        _this.sobrenome = sobrenome;
        _this.ocupaçao = 'Estudando';
        _this.matricula = matricula;
        _this.escola = escola;
        _this.grau = grau;
        _this.turma = turma;
        return _this;
    }
    Aluno.prototype.aprende = function () {
        _super.prototype.ouve.call(this);
        _super.prototype.fala.call(this);
        console.log(this.nome + " " + this.sobrenome + " aprendeu!");
    };
    return Aluno;
}(Pessoa_1.Pessoa));
exports.Aluno = Aluno;
