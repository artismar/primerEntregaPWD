<?php
$dir = "../../files/";
$msj = "";
if ($_FILES['file']['error']<=0){
    $name = $_FILES['file']['name'];
    $tipo = $_FILES['file']['type'];
    if ($tipo == "text/plain"){
        if (!copy($_FILES['file']['tmp_name'], $dir.$_FILES['file']['name'])){
            $msj = "No se pudo subir el archivo.";
        } else{
            $msj = "El archivo ".$_FILES['file']['name']." se ha subido con exito!";
            $txt = fopen("../../files/{$name}", 'r'); 
            $texto = '';
            while (!feof($txt)) {
                $linea = fgets($txt);
                $saltoDeLinea = nl2br($linea);
                $texto = $texto . $saltoDeLinea;
            }
            fclose($txt); 
            $msj .= "<br><br>".$texto;
        }
    } else{
        $msj = "El archivo que subiste no tiene formato txt";
    }
} else {
    $msj = "No se recibieron datos.";
}

?>