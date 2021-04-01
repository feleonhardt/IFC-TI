var Carro = /** @class */ (function () {
    function Carro(modelo, marca, ano, portas, tipoCombustivel, preco) {
        this.modelo = modelo;
        this.marca = marca;
        this.ano = ano;
        this.portas = portas;
        this.tipoCombustivel = tipoCombustivel;
        this.preco = preco;
    }
    Carro.prototype.identificaCarro = function () {
        console.log("Ve\u00EDculo da " + this.marca + ", com nome de " + this.modelo + " e produzido em " + this.ano);
    };
    return Carro;
}());
var carro = new Carro('UNO', 'Fiat', 2010, 2, 'Gasolina', 45000);
carro.identificaCarro();
