<?php
$producto = json_decode($_POST['producto'], true);

foreach ($carrito as $clave => $cantidad) {
    unset($_SESSION['carrito']['producto'][$clave]);
}

