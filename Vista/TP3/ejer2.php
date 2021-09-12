<?php 
$title = "TP 3";
include_once("../estructura/cabecera.php");
?>
    <div class="fondo">
        <h1 class="text-center">Trabajo Practico N3</h1>
        <p> Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
            que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su
            contenido en un textarea.
        </p>
        <form action='ejer2msj.php' method='POST' enctype="multipart/form-data">
            <div class="text-center">
                <label for='file'>Archivo: </label> <br>
                <input name='file' id='file' type="file" required>
            </div>
            <div class="text-center">
                <input type="submit" required>
            </div>
        </form>
    </div>
<?php 
include_once("../estructura/pie.php");
?>