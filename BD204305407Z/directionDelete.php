<?php
include('../conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['idDireccion'])) {
  $idDireccion = $_POST['idDireccion'];

  // Implementa la lógica para eliminar la dirección en la base de datos
  $delete_query = "CALL deleteDirection('$idDireccion')";

  $result = consultar("localhost", "root", "", $delete_query);

  if ($result) {
    echo json_encode(['success' => true, 'message' => 'Dirección eliminada con éxito.']);
  } else {
    echo json_encode(['success' => false, 'message' => 'Error al eliminar la dirección. Tiene asociada alguna órden activa']);
  }
}
?>
