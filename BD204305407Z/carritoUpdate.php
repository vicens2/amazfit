<?php

include('../conexion.php');
if (isset($_POST['action'])) {
    session_start();
    $action = $_POST['action'];
    $id = isset($_POST['id']) ? $_POST['id'] : 0;

    $datos = [];

    switch ($action) {
        case 'agregar':
            $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : 0;
            $respuesta = agregar($id, $cantidad);
            $datos['ok'] = $respuesta > 0;
            $datos['sub'] = number_format($respuesta, 2, '.', ',') . "€";
            break;

        case 'eliminar':
            $datos['ok'] = eliminar($id);
            break;

        default:
            $datos['ok'] = false;
    }

    echo json_encode($datos);
}

function agregar($producto, $cantidad)
{
    $res = 0;

    if ($producto > 0 && $cantidad > 0 && is_numeric($cantidad)) {
        if (isset($_SESSION['carrito']['producto'][$producto])) {
            $_SESSION['carrito']['producto'][$producto] = $cantidad;
            $producto_query = "SELECT precio, descuento FROM Caracteristica JOIN Producto ON Caracteristica.idCaracteristica = '$producto' AND Producto.idProducto = Caracteristica.idProducto";
            $result = consultar("localhost", "root", "", $producto_query);
            $fila = mysqli_fetch_array($result);

            $precio = $fila['precio'];
            $descuento = $fila['descuento'];

            $precio_des = $precio - (($precio * $descuento) / 100);
            $res = $cantidad * $precio_des;

            return $res;
        }
    }

    return $res;
}

function eliminar($producto)
{
    if ($producto > 0 && isset($_SESSION['carrito']['producto'][$producto])) {
        unset($_SESSION['carrito']['producto'][$producto]);
        return true;
    }

    return false;
}
