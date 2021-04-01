function calculaSalario() {
    var atual = parseInt(document.getElementById("atual").value);
    var percentual = parseInt(document.getElementById("percentual").value);
    document.getElementById("resultado").innerHTML =
        "Sal\u00E1rio Final: R$ " + reajuste(atual, percentual);
}
function reajuste(atual, reajuste) {
    var res = ((atual * reajuste) / 100) + atual;
    return res;
}
