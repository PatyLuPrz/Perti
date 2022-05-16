function rfcValido(rfc) {
    var re = /^([ A-ZÑ&]?[A-ZÑ&]{3}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/,
        validado = rfc.match(re);

    if (!validado)
        return false;

    var digitoVerificador = validado.pop(),
        rfcSinDigito = validado.slice(1).join('')

    var diccionario = "0123456789ABCDEFGHIJKLMN&OPQRSTUVWXYZ Ñ",
        lngSuma = 0.0,
        digitoEsperado;

    if (rfcSinDigito.length == 11) rfc = " " + rfc; 
    for (var i = 0; i < 13; i++)
        lngSuma = lngSuma + diccionario.indexOf(rfcSinDigito.charAt(i)) * (13 - i);
    digitoEsperado = 11 - lngSuma % 11;
    if (digitoEsperado == 11) digitoEsperado = 0;
    if (digitoEsperado == 10) digitoEsperado = "A";

    return digitoVerificador == digitoEsperado;
}


function validarInput(input) {
    var rfc = input.value.toUpperCase(),
        resultado = document.getElementById("resultado"),
        valido = "No válido";

    if (rfcValido(rfc)) { // ⬅️ Acá se comprueba
        console.log("valido");
        valido = "Valido";
        resultado.classList.remove("d-none");
        resultado.classList.remove("alert-danger");
        resultado.classList.add("alert-success");
        setTimeout(() => {resultado.classList.add("d-none");}, 5000);
    } else {
        resultado.classList.remove("d-none");
        resultado.classList.remove("alert-success");
        resultado.classList.add("alert-danger");
        setTimeout(() => {resultado.classList.add("d-none");}, 8000);
    }
    resultado.innerText = "Formato " + valido + "\nAsegurate de escribirlo correctamente";
}