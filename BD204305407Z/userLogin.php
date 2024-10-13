<?php
$user = $_POST['user'];
$password = $_POST['password'];

include('../conexion.php');
$user_query = "SELECT * FROM UsuCli WHERE UsuCli.emailCli = '$user' AND UsuCli.password = '$password'";
$result = consultar("localhost", "root", "", $user_query);

if (($reg = mysqli_fetch_array($result))) {
    session_start();
    $_SESSION["user"] = $reg['emailCli'];
    $_SESSION["nombre"] = $reg['nombre'];
    $_SESSION["apellido"] = $reg['apellido'];
    $value = ["user" => $reg['emailCli'], "nombre" => $reg['nombre'], "apellido" => $reg['apellido']];
} else {
    //Usuari not found
    $value = ["user" => "UserNotFound"];
}
echo json_encode($value);
 