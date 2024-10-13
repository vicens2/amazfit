<?php

if (isset($_GET['transaccion'])) {
  $transaccion = $_GET['transaccion'];
}

include('../conexion.php');

session_start();

$pedido_query = "SELECT * FROM Carrito WHERE idCarrito = '$transaccion'";
$result = consultar("localhost", "root", "", $pedido_query);
$reg = mysqli_fetch_array($result);

if (is_null($reg['fechaEntrega'])) {
  $fechaEntrega = 'En trámite';
} else {
  $fechaEntrega = date("d/m/Y", strtotime($reg['fechaEntrega']));
}

$user = $reg['emailCli'];
$user_query = "SELECT * FROM UsuCli WHERE emailCli = '$user'";
$result_user = consultar("localhost", "root", "", $user_query);
$reg_user = mysqli_fetch_array($result_user);

$idDir = $reg['idDireccion'];
$directio_query = "SELECT * FROM Direccion WHERE idDireccion = '$idDir'";
$result_dir = consultar("localhost", "root", "", $directio_query);
$reg_dir = mysqli_fetch_array($result_dir);

$user_data = [
  'nombre' => $reg_user['nombre'],
  'apellido' => $reg_user['apellido'],
  'email' => $user,
  'direccion' => $reg_dir['calle'] . ", " . $reg_dir['poblacion'] . ", " . $reg_dir['provincia'] . ", " . $reg_dir['codigoPostal'] . ", " . $reg_dir['pais'] . "."
];

$pedido_data = [
  'fecha' => date("d/m/Y", strtotime($reg['fecha'])),
  'fecha_entrega' => $fechaEntrega,
  'transaccion' => $reg['transaccion'],
  'total' => $reg['totalPagar'],
  'estado' => $reg['estadoPedido']
];
?>
<!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../css/vendors.css">
  <link rel="stylesheet" href="../css/main.css">

  <title>AmazFit</title>
</head>

<body>
  <div class="preloader js-preloader">
    <div class="preloader__wrap">
      <div class="preloader__icon">
        <svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_1_41)">
            <path d="M32.9675 13.9422C32.9675 6.25436 26.7129 0 19.0251 0C11.3372 0 5.08289 6.25436 5.08289 13.9422C5.08289 17.1322 7.32025 21.6568 11.7327 27.3906C13.0538 29.1071 14.3656 30.6662 15.4621 31.9166V35.8212C15.4621 36.4279 15.9539 36.92 16.561 36.92H21.4895C22.0965 36.92 22.5883 36.4279 22.5883 35.8212V31.9166C23.6849 30.6662 24.9966 29.1071 26.3177 27.3906C30.7302 21.6568 32.9675 17.1322 32.9675 13.9422V13.9422ZM30.7699 13.9422C30.7699 16.9956 27.9286 21.6204 24.8175 25.7245H23.4375C25.1039 20.7174 25.9484 16.7575 25.9484 13.9422C25.9484 10.3587 25.3079 6.97207 24.1445 4.40684C23.9229 3.91841 23.6857 3.46886 23.4347 3.05761C27.732 4.80457 30.7699 9.02494 30.7699 13.9422ZM20.3906 34.7224H17.6598V32.5991H20.3906V34.7224ZM21.0007 30.4014H17.0587C16.4167 29.6679 15.7024 28.8305 14.9602 27.9224H16.1398C16.1429 27.9224 16.146 27.9227 16.1489 27.9227C16.152 27.9227 23.0902 27.9224 23.0902 27.9224C22.3725 28.8049 21.6658 29.6398 21.0007 30.4014ZM19.0251 2.19765C20.1084 2.19765 21.2447 3.33365 22.1429 5.3144C23.1798 7.60078 23.7508 10.6649 23.7508 13.9422C23.7508 16.6099 22.8415 20.6748 21.1185 25.7245H16.9322C15.2086 20.6743 14.2994 16.6108 14.2994 13.9422C14.2994 10.6649 14.8706 7.60078 15.9075 5.3144C16.8057 3.33365 17.942 2.19765 19.0251 2.19765V2.19765ZM7.28053 13.9422C7.28053 9.02494 10.3184 4.80457 14.6157 3.05761C14.3647 3.46886 14.1273 3.91841 13.9059 4.40684C12.7425 6.97207 12.102 10.3587 12.102 13.9422C12.102 16.7584 12.9462 20.7176 14.6126 25.7245H13.2259C9.33565 20.6126 7.28053 16.5429 7.28053 13.9422Z" fill="#3554D1" />
          </g>

          <defs>
            <clipPath id="clip0_1_41">
              <rect width="36.92" height="36.92" fill="white" transform="translate(0.540039)" />
            </clipPath>
          </defs>
        </svg>
      </div>
    </div>

    <div class="preloader__title">AmazFit</div>
  </div>

  <main>

    <section class="layout-pt-lg layout-pb-lg bg-blue-2">
      <div class="container">
        <div class="row justify-center">
          <div class="col-xl-10 col-lg-11">

            <div class="bg-white rounded-4 mt-30">
              <div class="layout-pt-lg layout-pb-lg px-50">
                <div class="row justify-between">
                  <div class="col-auto">
                    <img src="../img/general/logo-dark.svg" alt="logo icon">
                  </div>

                  <div class="col-xl-4">
                    <div class="row justify-between items-center">
                      <div class="col-auto">
                        <div class="text-26 fw-600">Factura #</div>
                      </div>

                      <div class="col-auto">
                        <div class="text-18 fw-500 text-light-1"><?= $transaccion ?></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row justify-between pt-30">
                  <div class="col-auto">
                    <div class="text-20 fw-600">Estado del pedido
                      <div class="text-18 fw-500 text-light-1">
                        <?php
                        switch ($pedido_data['estado']) {
                          case 'COMPLETED':
                            echo 'Confirmado';
                            break;

                          case 'CANCELED':
                            echo 'Cancelado</div>';
                            break;

                          case 'PREPARED':
                            echo 'Preparado';
                            break;

                          case 'COMING':
                            echo 'En Camino';
                            break;

                          case 'DELIVERED':
                            echo 'Entregado';
                            break;

                          case 'RETURNED':
                            echo 'Devuelto';
                            break;
                        } ?>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row justify-between pt-30">
                  <div class="col-auto">
                    <div class="text-15 text-light-1">Fecha de compra:</div>
                    <div class="text-15 fw-500 lh-15"><?= $pedido_data['fecha'] ?></div>
                  </div>

                  <div class="col-xl-4">
                    <div class="text-15 text-light-1">Fecha de entrega:</div>
                    <div class="text-15 fw-500 lh-15"><?= $pedido_data['fecha_entrega'] ?></div>
                  </div>
                </div>

                <div class="row justify-between pt-30">
                  <div class="col-auto">
                    <div class="text-20 fw-500">Empresa</div>
                    <div class="text-15 fw-500">AmazFit</div>
                    <div class="text-15 fw-500">ventas@amazfit.com</div>
                    <div class="text-15 text-light-1 mt-10">Parc Bit, Edifici U, 07120 Palma</div>
                  </div>

                  <div class="col-xl-4">
                    <div class="text-20 fw-500">Cliente</div>
                    <div class="text-15 fw-500"><?= $user_data['nombre'] ?> <?= $user_data['apellido'] ?></div>
                    <div class="text-15 fw-500"><?= $user_data['email'] ?></div>
                    <div class="text-15 text-light-1 mt-10"><?= $user_data['direccion'] ?></div>
                  </div>
                </div>

                <div class="row pt-50">
                  <div class="col-12">
                    <table class="table col-12">
                      <thead class="bg-blue-1-05 text-blue-1">
                        <tr>
                          <th>Producto/s</th>
                          <th class="text-center">Precio</th>
                          <th class="text-center">Cantidad</th>
                          <th class="text-center">Subtotal</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $cantidad_query = "SELECT * FROM Cantidad WHERE idCarrito = '$transaccion'";
                        $result_cantidad = consultar("localhost", "root", "", $cantidad_query);
                        $hay_prducts = mysqli_num_rows($result_cantidad);
                        if ($hay_prducts) {
                          while ($fila = mysqli_fetch_array($result_cantidad)) :
                            $idCaract = $fila['idCaracteristica'];
                            $prod_query = "SELECT * FROM Caracteristica JOIN Producto ON Caracteristica.idCaracteristica = '$idCaract' AND Producto.idProducto = Caracteristica.idProducto";
                            $result_prod = consultar("localhost", "root", "", $prod_query);
                            while ($reg_prod = mysqli_fetch_array($result_prod)) :
                              $categoria = $reg_prod['nombreCat'];
                              $precio = $reg_prod['precio'];
                              $cantidad = $fila['cantidad'];
                              $descuento = $reg_prod['descuento'];
                              $precio_des = $precio - (($precio * $descuento) / 100);
                              $subtotal = $cantidad * $precio_des;
                        ?>
                              <tr>
                                <?php if ($categoria == 'creatina' or $categoria == 'proteina' or $categoria == 'pre_workout' or $categoria == 'energia') {
                                ?>
                                  <td><?= $reg_prod['nombre'] ?> <?= $reg_prod['talla'] ?> g, sabor: <?= $reg_prod['color'] ?></td>
                                <?php
                                } else { ?>
                                  <td><?= $reg_prod['nombre'] ?> <?= $reg_prod['talla'] ?>, color: <?= $reg_prod['color'] ?></td>
                                <?php } ?>

                                <td class="text-center"><?php echo number_format($precio_des, 2, '.', ',') . "€"; ?></td>

                                <td class="text-center"><?= $fila['cantidad'] ?></td>

                                <td class="text-center"><?php echo number_format($subtotal, 2, '.', ',') . "€"; ?></td>

                              </tr>
                          <?php
                            endwhile;
                          endwhile; ?>
                          <tr class="text-center">
                            <td class="text-18 fw-500">Total: </td>
                            <td></td>
                            <td></td>
                            <td class="text-18 fw-500"><?php echo number_format($pedido_data['total'], 2, '.', ',') . "€";  ?></td>
                          </tr>
                        <?php  } else {
                          echo '<tr><td colspan = "4" class="text-center"><b>Lista vacía</b></td></tr>';
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="border-top-light py-50">
                <div class="row x-gap-60 y-gap-10 justify-center">
                  <div class="col-auto">
                    <a href="#" class="text-14">www.amazfit.com</a>
                  </div>
                  <div class="col-auto">
                    <a href="#" class="text-14">ventas@amazfit.com</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <script src="../js/vendors.js"></script>
  <script src="../js/main.js"></script>
</body>

</html>