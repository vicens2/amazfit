<?php
include('../conexion.php');

session_start();
$user = $_SESSION['user'];

$user_nom = $_POST['user_nom'];
$apellido = $_POST['apellido'];

$phone = $_POST['phone'];
$date = $_POST['date'];

// Eliminar comillas si alguna de las variables es NULL
$phone = $phone !== '' ? "'$phone'" : 'NULL';
$date = $date !== '' ? "'$date'" : 'NULL';


if ($phone != 'NULL' || $date != 'NULL') {
    $update_user = "CALL modifyUserCli('$user', '$user_nom', '$apellido', $phone, $date)";
} else {
    $update_user = "CALL modifyUserCli('$user', '$user_nom', '$apellido', NULL, NULL)";
}

$result = consultar("localhost", "root", "", $update_user);

echo json_encode($result);

?>