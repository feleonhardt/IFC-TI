class Bicicleta{
    marca: string;
    modelo : string;
    tipo : string;
    tamanhoAro : number;
    tamanhoQuadro : number;
    qntMarchas : number;
    suspensao : boolean;
    constructor (marca : string, modelo : string, tamanhoAro : number, tipo : string, tamanhoQuadro : number, qntMarchas : number, suspensao : boolean){
        this.marca = marca;
        this.modelo = modelo;
        this.tamanhoAro = tamanhoAro;
        this.tipo = tipo;
        this.tamanhoQuadro = tamanhoQuadro;
        this.qntMarchas = qntMarchas;
        this.suspensao = suspensao;
    }
    anunciaBicicleta(){
        console.log(`Vende-se Bicicleta ${this.tipo} ${this.marca} modelo ${this.modelo}, Aro ${this.tamanhoAro}", ${this.qntMarchas} marchas e quadro de ${this.tamanhoQuadro}". ${(this.suspensao) ? 'Possui' : 'Não possui'} suspensão!`);
    }
}

let bicicleta = new Bicicleta('mormai', 'fejif9', 29, 'mtb', 21, 24, true);
bicicleta.anunciaBicicleta();
let bicicleta2 = new Bicicleta('shimano', 'KSW', 29, 'mtb', 21, 24, false);
bicicleta2.anunciaBicicleta();