function calculaRaio():void {
    let raio: number = parseInt((<HTMLInputElement>document.getElementById("raio")).value);

    (<HTMLElement>document.getElementById("resultado")).innerHTML = 
    `Volume: ${volume(raio)} m³`;


}

function volume(raio:number):number {
    let volume = ((4*Math.PI*(raio*raio*raio))/3);
    return volume;
}