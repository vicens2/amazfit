<?php
include('../conexion.php');

$email = $_POST['email'];
$ape = $_POST['last'];
$nom = $_POST['user'];
$password = $_POST['password'];

$insert_user = "SELECT addUserCli('$email', '$password', '$nom', '$ape')";

$result = consultar("localhost", "root", "", $insert_user);

echo json_encode(mysqli_fetch_array($result));
?>