function passVerification(){
    var user = document.getElementById('inputUsername3');
    var pw = document.getElementById('inputPassword3');
    var msj = document.getElementById('passFalse');
    var enviar = true;

    if (pw.value == user.value){
        enviar = false;
        msj.innerHTML = "La contraseña no debe ser igual al usuario.";
    }

    return enviar;
}