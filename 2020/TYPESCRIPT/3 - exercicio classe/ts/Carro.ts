class Carro{
    modelo: string;
    marca : string;
    ano : number;
    portas : number;
    tipoCombustivel : string;
    preco : number;
    constructor (modelo : string, marca : string, ano : number, portas : number, tipoCombustivel : string, preco : number){
        this.modelo = modelo;
        this.marca = marca;
        this.ano = ano;
        this.portas = portas;
        this.tipoCombustivel = tipoCombustivel;
        this.preco = preco;
    }
    identificaCarro(){
        console.log(`Veículo da ${this.marca}, com nome de ${this.modelo} e produzido em ${this.ano}`);
    }
}

let carro = new Carro('UNO', 'Fiat', 2010, 2, 'Gasolina', 45000);
carro.identificaCarro();