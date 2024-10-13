<?php
include('../conexion.php');

if (isset($_POST['producto'])) {
    session_start();
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $color = $_POST['color'];
    $talla = $_POST['talla'];

    $carac_query = "SELECT idCaracteristica FROM Caracteristica WHERE idProducto = '$producto' AND color = '$color' AND talla = '$talla'";
    $result_carac = consultar("localhost", "root", "", $carac_query);
    $reg_carac = mysqli_fetch_array($result_carac);

    $idCaract = $reg_carac['idCaracteristica'];
    // $user = $_POST['user'];

    if (isset($_SESSION['carrito']['producto'][$idCaract])) {
        $_SESSION['carrito']['producto'][$idCaract] += $cantidad;
    } else {
        $_SESSION['carrito']['producto'][$idCaract] = $cantidad;
    }

    // if (!isset($_SESSION['carrito']['caracteristica'][$producto])) {
    //     $_SESSION['carrito']['caracteristica'][$producto] = $idCaract;
    // }

    $datos['numero'] = count($_SESSION['carrito']['producto']);
    $datos['ok'] = true;
    echo json_encode($datos);
}
