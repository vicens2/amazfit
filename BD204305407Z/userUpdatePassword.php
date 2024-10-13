<?php
include('../conexion.php');

session_start();
$user = $_SESSION['user'];

$newPass = $_POST['newPassword'];

$update_user = "CALL modifyUserCliPassword('$user', '$newPass')";

$result = consultar("localhost", "root", "", $update_user);

echo json_encode($result);
