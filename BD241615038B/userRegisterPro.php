<?php
include('../conexion.php');

$email = $_POST['email'];
$ape = $_POST['last'];
$nom = $_POST['user'];
$password = $_POST['password'];
$cif = $_POST['cif'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

$ape = $ape !== '' ? "'$ape'" : 'NULL';


if ($ape != 'NULL') {
    $insert_userPro = "SELECT addUserPro('$email', '$password', '$nom', '$ape', '$cif', '$telefono', '$direccion')";
} else {

    $insert_userPro = "SELECT addUserPro('$email', '$password', '$nom', NULL, '$cif', '$telefono', '$direccion')";
}

$result = consultar("localhost", "root", "", $insert_userPro);

echo json_encode(mysqli_fetch_array($result));
