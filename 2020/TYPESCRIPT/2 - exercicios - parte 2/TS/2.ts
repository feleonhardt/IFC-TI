function calculaSalario():void {
    let atual: number = parseInt((<HTMLInputElement>document.getElementById("atual")).value);
    let percentual: number = parseInt((<HTMLInputElement>document.getElementById("percentual")).value);

    (<HTMLElement>document.getElementById("resultado")).innerHTML = 
    `Salário Final: R$ ${reajuste(atual, percentual)}`;


}

function reajuste(atual:number, reajuste:number):number {
    let res = ((atual*reajuste)/100)+atual;
    return res;
}