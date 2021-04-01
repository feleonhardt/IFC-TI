function calculaPosNeg():void {
    let num: number = parseInt((<HTMLInputElement>document.getElementById("num")).value);

    (<HTMLElement>document.getElementById("resultado")).innerHTML = 
    `Resultado: ${verificaPosNeg(num) ? "Positivo" : "Negativo"} `;


}

function verificaPosNeg(valor:number):boolean {
    return valor >= 0;
}