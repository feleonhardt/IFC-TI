function calculaIdade() {
    var idade = parseInt(document.getElementById("idade").value);
    document.getElementById("resultado").innerHTML =
        (verifica(idade) ? "Maior" : "Menor") + " de idade!";
}
function verifica(anos) {
    return anos >= 18;
}
