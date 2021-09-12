<?php 
$title = "TP 1";
include_once("../estructura/cabecera.php");
?>
    <div class="fondo">
        <h1 class="text-center">Trabajo Practico N1</h1>
        <p>Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
            esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
            persona es mayor de edad o no; (si la edad es mayor o igual a 18).
            Enviar los datos usando el método GET y luego probar de modificar los datos
            directamente en la url para ver los dos posibles mensajes.
        </p>
        <form action='ejer6msj.php' method='GET'>
            <div class="text-center">
                <label for='nombre'>Nombre: </label> <br>
                <input name='nombre' id='nombre' required>
                <br>
                <label for='apellido'>Apellido: </label> <br>
                <input name='apellido' id='apellido' required>
                <br>
                <label for='edad'>Edad: </label> <br>
                <input type='number' name='edad' id='edad' required>
                <br>
                <label for='direccion'>Direccion: </label> <br>
                <input name='direccion' id='direccion' required>
                <br>
                <label for='estudio'>Estudios: </label> <br>
                <label> <input type='radio' name='estudio' value='No tiene estudios' required> No tiene estudios </label>
                <label> <input type='radio' name='estudio' value='Estudios primarios'> Estudios primarios </label>
                <label> <input type='radio' name='estudio' value='Estudios secundarios'> estudios secundarios </label>
                <br>
                <label for='sexo'>Sexo: </label> <br>
                <label> <input type='radio' name='sexo' value='masculino' required>Masculino </label>
                <label> <input type='radio' name='sexo' value='femenino'>Femenino </label>
                <br>
                <label for='deportes'>Deportes: </label> <br>
                <label><input type='checkbox' name='deportes[]' value='futbol'>Futbol</label>
                <label><input type='checkbox' name='deportes[]' value='basquet'>Basquet</label>
                <label><input type='checkbox' name='deportes[]' value='tenis'>Tenis</label>
                <label><input type='checkbox' name='deportes[]' value='voley'>Voley</label>
                <br><br>
                <input type='submit'>
            </div>
        </form>
    </div>
<?php 
include_once("../estructura/pie.php");
?>