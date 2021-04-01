class Notebook{
    marca: string;
    modelo : string;
    tamanhoTela : number;
    processado : string;
    memoria : string;
    preco : number;
    constructor (marca : string, modelo : string, tamanhoTela : number, processado : string, memoria : string, preco : number){
        this.marca = marca;
        this.modelo = modelo;
        this.tamanhoTela = tamanhoTela;
        this.processado = processado;
        this.memoria = memoria;
        this.preco = preco;
    }
    anunciaNotebook(){
        console.log(`Vende-se Notebook ${this.marca} modelo ${this.modelo}, possui tela de ${this.tamanhoTela}", processador ${this.processado} e ${this.memoria} de memória. Por apenas R$ ${this.preco}!`);
    }
}

let notebook = new Notebook('Dell', 'Inspiron I15 7567 gaming', 15.6, 'i7', '8 GB', 4600);
notebook.anunciaNotebook();