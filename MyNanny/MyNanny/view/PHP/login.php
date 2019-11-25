<?php

$username = $_POST["emailClient"];
$password = $_POST["passClient"];

$mysqli = new mysqli('localhost','root','','mynanny');

if (!$mysqli) {
    echo "No se pudo acceder a la base de datos";
}else {
    $sql = "SELECT * FROM client WHERE emailClient = '$username' and passClient = '$password'";
    $resultado = $mysqli->query($sql);
    if ($resultado->num_rows > 0) {
        $user = $resultado->fetch_array();
        session_start();
        $_SESSION['nameClient'] = $user["nameClient"];
        header('Location: ../HTML/pedirNanny.php');
    }else {
        echo "Usuario no existente";
    }
    $mysqli -> close();
}