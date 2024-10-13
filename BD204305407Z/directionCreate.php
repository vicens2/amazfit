<?php
include('../conexion.php');

session_start();
$user = $_SESSION['user'];

$direccion = $_POST['direccion'];
$provincia = $_POST['provincia'];
$localidad = $_POST['localidad'];
$pais = $_POST['pais'];
$codigo_postal = $_POST['codigo_postal'];

$zona_query = "SELECT * FROM Zona WHERE Zona.nombre = '$localidad'";
$result = consultar("localhost", "root", "", $zona_query);

if (($reg = mysqli_fetch_array($result))) {
    $id_zona = $reg['idZona'];

    $insert_direction_query = "INSERT INTO Direccion (calle, poblacion, provincia, codigoPostal, pais, emailCli, idZona) 
    VALUES ( '$direccion', '$localidad', '$provincia', '$codigo_postal', '$pais', '$user', '$id_zona')";
    $result_insert = consultar("localhost", "root", "", $insert_direction_query);

    echo json_encode($result_insert);
}
?>