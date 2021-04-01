var Bicicleta = /** @class */ (function () {
    function Bicicleta(marca, modelo, tamanhoAro, tipo, tamanhoQuadro, qntMarchas, suspensao) {
        this.marca = marca;
        this.modelo = modelo;
        this.tamanhoAro = tamanhoAro;
        this.tipo = tipo;
        this.tamanhoQuadro = tamanhoQuadro;
        this.qntMarchas = qntMarchas;
        this.suspensao = suspensao;
    }
    Bicicleta.prototype.anunciaBicicleta = function () {
        console.log("Vende-se Bicicleta " + this.marca + " " + this.tipo + " modelo " + this.modelo + ", Aro " + this.tamanhoAro + "\", " + this.qntMarchas + " marchas e quadro de " + this.tamanhoQuadro + "\". " + ((this.suspensao) ? 'Possui' : 'Não possui') + " suspens\u00E3o!");
    };
    return Bicicleta;
}());
var bicicleta = new Bicicleta('mormai', 'fejif9', 29, 'mtb', 21, 24, true);
bicicleta.anunciaBicicleta();
var bicicleta2 = new Bicicleta('shimano', 'KSW', 29, 'mtb', 21, 24, false);
bicicleta2.anunciaBicicleta();
