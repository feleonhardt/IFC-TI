function calculaPosNeg() {
    var num = parseInt(document.getElementById("num").value);
    document.getElementById("resultado").innerHTML =
        "Resultado: " + (verificaPosNeg(num) ? "Positivo" : "Negativo") + " ";
}
function verificaPosNeg(valor) {
    return valor >= 0;
}
