<?php

$user1 = array(
    'user' => 'lucas',
    'password' => 'hola1234'
);
$user2 = array(
    'user' => 'pepe',
    'password' => 'sandia99'
);
$user3 = array(
    'user' => 'alberto',
    'password' => 'contra43'
);
$user4 = array(
    'user' => 'raquel',
    'password' => 'popo4242'
);
$user5 = array(
    'user' => 'franco',
    'password' => 'soyfran94'
);
$users = array($user1, $user2, $user3, $user4, $user5);

// Verificamos que recibimos datos.
if ($_POST){
    $user = $_POST['user'];
    $pw = $_POST['password'];
    $login = false;
    for ($i=0;$i<count($users);$i++){
        if ($user == $users[$i]['user']){
            if ($pw == $users[$i]['password']){
                $login = true;
            }
        }
    }
    if ($login){
        $msj = "Te logueaste con exito! <br>
                User: $user <br>
                Password: $pw";
    } else {
        $msj = "Usuario o contraseña incorrectos!";
    }
} else{
    $msj = 'No se recibieron datos';
}

?>