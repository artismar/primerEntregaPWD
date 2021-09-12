<?php
error_reporting(0);
if ($_GET){
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $edad = $_GET['edad'];
    $direccion = $_GET['direccion'];
    $estudio = $_GET['estudio'];
    $sexo = $_GET['sexo'];
    $deportes = $_GET['deportes'];

    $msj = "Hola yo soy $nombre $apellido, tengo $edad años y vivo en $direccion <br>";
    $msj .= "Estudios: $estudio <br>";
    $msj .= "Sexo: $sexo";
    if ($edad >= 18){
        $msj .= "<br>Soy Mayor de edad";
    } elseif ($edad < 18){
        $msj .= "<br>Soy Menor de edad";
    }
    if(is_array($deportes)){
        $msj .= "<br>Deportes: ".implode(', ',$deportes).".";
    } else{
        $msj .= '<br>No hace deportes';
    }
} else {
    $msj .= '<br> No se recibieron datos';
}
?>