<?php
include('../conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['idDireccion'])) {
    $idDireccion = $_POST['idDireccion'];

    // Implementa la lógica para obtener detalles de la dirección en la base de datos
    $query = "SELECT * FROM Direccion WHERE idDireccion = $idDireccion";
    $result = consultar("localhost", "root", "", $query);

    if ($result) {
        $direccion = mysqli_fetch_assoc($result);
        echo json_encode(['success' => true, 'direccion' => $direccion]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al obtener detalles de la dirección.']);
    }
}
?>
