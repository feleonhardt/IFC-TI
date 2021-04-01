function calculaIdades():void {
    let id1: number = parseInt((<HTMLInputElement>document.getElementById("id1")).value);
    let id2: number = parseInt((<HTMLInputElement>document.getElementById("id2")).value);

    (<HTMLElement>document.getElementById("resultado")).innerHTML = 
    `Resultado: ${verificaIdades(id1, id2)}`;


}

function verificaIdades(idade1:number, idade2:number):string {
    let res: string;
    if (idade1 > idade2) {
        res = "1ª pessoa é mais velha!";
    }else if (idade1 < idade2) {
        res = "2ª pessoa é mais velha!";
    }else{
        res = "As duas pessoas têm a mesma idade!"
    }
    return res;
}