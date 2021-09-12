<?php 
$title = "TP 2";
include_once("../estructura/cabecera.php");
?>

<div class="fondo">
    <div class="text-center">
        <div>
            <h1>Trabajo Practico N2</h1>
            <p>Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario
                y la password para loguearse. Los datos del formulario son enviados a un script
                verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El
                arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje
                de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo
                y en caso contrario un mensaje de error.
            </p>
        </div>
        <div class="formTP2">
            <div class="row mb-5">
                <h2>Member Login</h2>
            </div>
            <form action="ejer3msj.php" method='POST' onsubmit="return passVerification()">
                <div class="row mb-5 d-flex justify-content-center align-items-center">
                    <div class="col-sm-1">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="col-sm-4 text-center">
                        <input type="text" class="form-control" id="inputUsername3" placeholder="Username" name="user" required>
                    </div>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <div class="row mb-5 d-flex justify-content-center align-items-center">
                    <div class="col-sm-1">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" required>
                    </div>
                    <div id="passFalse">
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>


<?php 
include_once("../estructura/pie.php");
?>

<!-- [a-zA-Z]+[0-9]+[a-zA-Z0-9]*|[0-9]+[a-zA-Z]+[a-zA-Z0-9]*{8,} -->