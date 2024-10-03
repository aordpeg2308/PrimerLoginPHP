<?php
if (!isset($_POST['usuario']) || !isset($_POST['contrasenia'])) {

    header('Location: http://localhost/247login.html');
    exit();
} else {

    $usuarios = [
        'Alejandro' => '123',
        'Jesus' => '456',
        'Alex' => '789',
        'Adrian' => '321',
        'Gabi' => '654'
    ];


    $nombreUsuario = $_POST['usuario'];
    $contraseniaUsuario = $_POST['contrasenia'];
    if (array_key_exists($nombreUsuario, $usuarios) && $usuarios[$nombreUsuario] === $contraseniaUsuario) {
        include '247ok.php';
    } else {

        include '247ko.php';
    }
}
