function calculaMedia() {
    var n1 = parseInt(document.getElementById("n1").value);
    var n2 = parseInt(document.getElementById("n2").value);
    var n3 = parseInt(document.getElementById("n3").value);
    var media = ((n1 * 2) + (n2 * 3) + (n3 * 5)) / 10;
    document.getElementById("resultado").innerHTML =
        "M\u00E9dia Final: " + media;
}
