function calculaIdades() {
    var id1 = parseInt(document.getElementById("id1").value);
    var id2 = parseInt(document.getElementById("id2").value);
    document.getElementById("resultado").innerHTML =
        "Resultado: " + verificaIdades(id1, id2);
}
function verificaIdades(idade1, idade2) {
    var res;
    if (idade1 > idade2) {
        res = "1ª pessoa é mais velha!";
    }
    else if (idade1 < idade2) {
        res = "2ª pessoa é mais velha!";
    }
    else {
        res = "As duas pessoas têm a mesma idade!";
    }
    return res;
}
