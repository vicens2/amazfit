<?php

include('../conexion.php');
session_start();
$user = $_SESSION['user'];
if (isset($_POST['detalles']) && isset($_POST['direccion'])) {
    // Obtén los datos enviados y decodifica el JSON
    $detalles = json_decode($_POST['detalles'], true);
    $direccion = $_POST['direccion'];
    $carrito = json_decode($_POST['carrito'], true);


    // Accede a las propiedades del objeto
    $id = $detalles['id'];
    $status = $detalles['status'];
    $fecha = $detalles['update_time'];
    $nueva_fecha = date('Y-m-d', strtotime($fecha));
    $nueva_hora = date('H:i:s', strtotime($fecha));

    // Accede a las propiedades del objeto dentro de purchase_units
    $total = $detalles['purchase_units'][0]['amount']['value'];

    $insert_pedido_query = "INSERT INTO Carrito (fecha, hora, totalPagar, transaccion, fechaEnvio, fechaEntrega, estadoPedido, emailCli, idDireccion) 
    VALUES ('$nueva_fecha', '$nueva_hora', '$total', '$id', DATE_ADD('$nueva_fecha', INTERVAL 5 DAY), NULL, '$status', '$user', '$direccion')";
    $conexion = mysqli_connect("localhost", "root", "") or die;
    $db = mysqli_select_db($conexion, "amazfit") or die;
    $result = mysqli_query($conexion, $insert_pedido_query) or die;
    $carrito_id = mysqli_insert_id($conexion);
    mysqli_close($conexion);

    foreach ($carrito as $prod) {
        // Accede a las propiedades del producto en el carrito
        $idCarac = $prod[0];
        $cantidad = $prod[13];
        $insert_cantidad_query = "INSERT INTO Cantidad (cantidad, idCaracteristica, idCarrito, emailCon) 
        VALUES ('$cantidad', '$idCarac', '$carrito_id', 'admin@amazfit.com')";
        $result_insert_cantidad = consultar("localhost", "root", "", $insert_cantidad_query);
    }
    $datos['ok'] = true;
    $datos['carrito'] = $carrito_id;
} else {
    $datos['ok'] = false;
}

echo json_encode($datos);
