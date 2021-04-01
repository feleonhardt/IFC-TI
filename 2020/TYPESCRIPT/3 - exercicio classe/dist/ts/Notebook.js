var Notebook = /** @class */ (function () {
    function Notebook(marca, modelo, tamanhoTela, processado, memoria, preco) {
        this.marca = marca;
        this.modelo = modelo;
        this.tamanhoTela = tamanhoTela;
        this.processado = processado;
        this.memoria = memoria;
        this.preco = preco;
    }
    Notebook.prototype.anunciaNotebook = function () {
        console.log("Vende-se Notebook " + this.marca + " modelo " + this.modelo + ", possui tela de " + this.tamanhoTela + "\", processador " + this.processado + " e " + this.memoria + " de mem\u00F3ria. Por apenas R$ " + this.preco + "!");
    };
    return Notebook;
}());
var notebook = new Notebook('Dell', 'Inspiron I15 7567 gaming', 15.6, 'i7', '8 GB', 4600);
notebook.anunciaNotebook();
