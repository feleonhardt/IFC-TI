function calculaMedia():void {
    let n1: number = parseInt((<HTMLInputElement>document.getElementById("n1")).value);
    let n2: number = parseInt((<HTMLInputElement>document.getElementById("n2")).value);
    let n3: number = parseInt((<HTMLInputElement>document.getElementById("n3")).value);

    let media = ((n1*2)+(n2*3)+(n3*5))/10;

    (<HTMLElement>document.getElementById("resultado")).innerHTML = 
    `Média Final: ${media}`;


}