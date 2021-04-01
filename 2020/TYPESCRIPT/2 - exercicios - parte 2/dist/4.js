function calculaRaio() {
    var raio = parseInt(document.getElementById("raio").value);
    document.getElementById("resultado").innerHTML =
        "Volume: " + volume(raio) + " m\u00B3";
}
function volume(raio) {
    var volume = ((4 * Math.PI * (raio * raio * raio)) / 3);
    return volume;
}
