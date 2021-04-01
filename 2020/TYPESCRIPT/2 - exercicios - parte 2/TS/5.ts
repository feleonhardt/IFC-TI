function calculaIdade():void {
    let idade: number = parseInt((<HTMLInputElement>document.getElementById("idade")).value);

    (<HTMLElement>document.getElementById("resultado")).innerHTML = 
    `${verifica(idade) ? "Maior" : "Menor"} de idade!`;


}

function verifica(anos:number):boolean {
    return anos >= 18;
}