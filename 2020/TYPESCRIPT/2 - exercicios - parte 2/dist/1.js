function calculaPercentual() {
    var total = parseInt(document.getElementById("total").value);
    var brancos = parseInt(document.getElementById("brancos").value);
    var nulos = parseInt(document.getElementById("nulos").value);
    var validos = parseInt(document.getElementById("validos").value);
    var percntBrancos = percentual(total, brancos);
    var percntNulos = percentual(total, nulos);
    var percntvalidos = percentual(total, validos);
    document.getElementById("resultado").innerHTML =
        "Resultados:<br>\n    Votos brancos: " + percntBrancos + "%<br>\n    Votos nulos: " + percntNulos + "%<br>\n    Votos v\u00E1lidos: " + percntvalidos + "%<br>";
}
function percentual(total, divisor) {
    var percent = (divisor / total) * 100;
    return percent;
}
