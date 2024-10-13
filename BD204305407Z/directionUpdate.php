<?php
include('../conexion.php');

session_start();
$user = $_SESSION['user'];

$idDireccion = $_POST['idDireccion'];
$direccion = $_POST['direccion'];
$provincia = $_POST['provincia'];
$localidad = $_POST['localidad'];
$pais = $_POST['pais'];
$codigo_postal = $_POST['codigo_postal'];

$zona_query = "SELECT * FROM Zona WHERE Zona.nombre = '$localidad'";
$result = consultar("localhost", "root", "", $zona_query);

if (($reg = mysqli_fetch_array($result))) {
    $id_zona = $reg['idZona'];

    $update_query = "UPDATE Direccion SET
                    calle = '$direccion',
                    provincia = '$provincia',
                    poblacion = '$localidad',
                    pais = '$pais',
                    codigoPostal = '$codigo_postal',
                    idZona = '$id_zona'
                    WHERE idDireccion = $idDireccion";
    $result_insert = consultar("localhost", "root", "", $update_query);

    echo json_encode($result_insert);
}
