function calculaPercentual():void {
    let total: number = parseInt((<HTMLInputElement>document.getElementById("total")).value);
    let brancos: number = parseInt((<HTMLInputElement>document.getElementById("brancos")).value);
    let nulos: number = parseInt((<HTMLInputElement>document.getElementById("nulos")).value);
    let validos: number = parseInt((<HTMLInputElement>document.getElementById("validos")).value);

    let percntBrancos = percentual(total, brancos);
    let percntNulos = percentual(total, nulos);
    let percntvalidos = percentual(total, validos);

    (<HTMLElement>document.getElementById("resultado")).innerHTML = 
    `Resultados:<br>
    Votos brancos: ${percntBrancos}%<br>
    Votos nulos: ${percntNulos}%<br>
    Votos válidos: ${percntvalidos}%<br>`;


}

function percentual(total:number, divisor:number):number {
    let percent = (divisor/total)*100;
    return percent;
}