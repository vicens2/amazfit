<?php
include('../conexion.php');

session_start();
$user = $_SESSION['user'];
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];

$num_cart = 0;

if (isset($_SESSION['carrito']['producto'])) {
  $num_cart = count($_SESSION['carrito']['producto']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../css/vendors.css">
  <link rel="stylesheet" href="../css/main.css">
  <style>
    html,
    body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    .dashboard__main {
      overflow: hidden;
      height: 100%;
      width: 100%;
      padding-left: var(--dashboard-width);
      will-change: padding-left;
      transition: all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1);
    }

    .dashboard__content {
      width: 100%;
      min-height: 100vh;
      /* vh significa viewport height */
      padding: 60px;
      padding-bottom: 0;
    }
  </style>
  <title>AmazFit</title>
</head>

<body data-barba="wrapper">


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


  <div class="header-margin"></div>
  <header data-add-bg="" class="header -dashboard bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
    <div data-anim="fade" class="header__container px-30 sm:px-20">
      <div class="-left-side">
        <a href="../index.php" class="header-logo" data-x="header-logo" data-x-toggle="is-logo-dark">
          <img src="../img/general/logo-dark.svg" alt="logo icon">
          <img src="../img/general/logo-dark.svg" alt="logo icon">
        </a>
      </div>

      <div class="row justify-between items-center pl-60 lg:pl-20">
        <div class="col-auto">
          <div class="d-flex items-center">
            <button data-x-click="dashboard">
              <i class="icon-menu-2 text-20"></i>
            </button>

            <div class="single-field relative d-flex items-center md:d-none ml-30">
              <input class="pl-50 border-light text-dark-1 h-50 rounded-8" type="email" placeholder="Search">
              <button class="absolute d-flex items-center h-full">
                <i class="icon-search text-20 px-15 text-dark-1"></i>
              </button>
            </div>
          </div>
        </div>

        <div class="col-auto">
          <div class="d-flex items-center">

            <div class="header-menu " data-x="mobile-menu" data-x-toggle="is-menu-active">
              <div class="mobile-overlay"></div>

              <?php
              include('header_menu.php');
              ?>
            </div>
            <div><a href="login.php" class="d-flex items-center icon-user text-inherit text-22"></a></div>
            <a href="checkout.php" class="button px-5 fw-400 rounded-full text-14 border-white -blue-1 h-50 text-white ml-20" aria-label="Cesta">
              <span class="responsiveFlyoutBasket_icon_container">
                <svg fill="#000" class="text-13 text-light fw-500 responsiveFlyoutBasket_icon responsiveFlyoutBasket_icon-basket" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M6.57412994,10 L17.3932043,10 L13.37,4.18336196 L15.0021928,3 L19.8438952,10 L21,10 C21.5522847,10 22,10.4477153 22,11 C22,11.5522847 21.5522847,12 21,12 L17.5278769,19.8122769 C17.2068742,20.534533 16.4906313,21 15.7002538,21 L8.29974618,21 C7.50936875,21 6.79312576,20.534533 6.47212308,19.8122769 L3,12 C2.44771525,12 2,11.5522847 2,11 C2,10.4477153 2.44771525,10 3,10 L4.11632272,10 L9,3 L10.6274669,4.19016504 L6.57412994,10 Z M5.18999958,12 L8.29999924,19 L15.6962585,19 L18.8099995,12 L5.18999958,12 Z"></path>
                </svg>

                <span class="responsiveFlyoutBasket_itemsCount badge text-dark-1" data-js-element="itemsCount" id="count_carrito">
                  <?= $num_cart ?>
                </span>
              </span>
            </a>
            <div class="d-none xl:d-flex x-gap-20 items-center pl-20" data-x="header-mobile-icons" data-x-toggle="text-white">
              <div><button class="d-flex items-center icon-menu text-20" data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>


  <div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
    <div class="dashboard__sidebar bg-white scroll-bar-1">


      <div class="sidebar -dashboard">

        <div class="sidebar__item">
          <div class="sidebar__button -is-active">
            <a href="client_dash.php" class="d-flex items-center text-15 lh-1 fw-500">
              <img src="../img/dashboard/sidebar/house.svg" alt="image" class="mr-15">
              Inicio de tu cuenta
            </a>
          </div>
        </div>

        <div class="sidebar__item">
          <div class="sidebar__button ">
            <a href="client_book.php" class="d-flex items-center text-15 lh-1 fw-500">
              <img src="../img/dashboard/sidebar/sneakers.svg" alt="image" class="mr-15">
              Sus Pedidos
            </a>
          </div>
        </div>

        <div class="sidebar__item">
          <div class="sidebar__button ">
            <a href="client_settings.php" class="d-flex items-center text-15 lh-1 fw-500">
              <img src="../img/dashboard/sidebar/gear.svg" alt="image" class="mr-15">
              Detalles de la cuenta
            </a>
          </div>
        </div>

        <div class="sidebar__item">
          <div class="sidebar__button ">
            <a href="client_direction.php" class="d-flex items-center text-15 lh-1 fw-500">
              <img src="../img/dashboard/sidebar/map.svg" alt="image" class="mr-15">
              Dirección
            </a>
          </div>
        </div>

        <div class="sidebar__item">
          <div class="sidebar__button ">
            <a href="userLogout.php" class="d-flex items-center text-15 lh-1 fw-500">
              <img src="../img/dashboard/sidebar/log-out.svg" alt="image" class="mr-15">
              Cerrar Sesión
            </a>
          </div>
        </div>

      </div>


    </div>

    <div class="dashboard__main">
      <div class="dashboard__content bg-light-2">
        <div class="row y-gap-20 justify-between items-end pb-30 lg:pb-20 md:pb-16">
          <div class="col-auto">

            <h1 class="text-30 lh-14 fw-600">Bienvenido/a <?= $nombre ?> <?= $apellido ?></h1>
            <div class="text-15 text-light-1">Inicio de tu cuenta</div>

          </div>

          <div class="col-auto">

          </div>
        </div>

        <div class="row y-gap-30 pt-20">

          <div class="col-xl-12 col-md-6">
            <div class="py-30 px-30 rounded-4 bg-white shadow-3">
              <div class="d-flex justify-between items-center">
                <h2 class="text-22 lh-1 fw-500">
                  Pedidos recientes
                </h2>

                <div>
                  <div style="border-radius: 10px !important; cursor: pointer;" onclick="location.href='client_book.php'" class=" px-4 py-4 text-underline text-center text-14 fw-500 bg-white text-dark-1 border-4 border-dark-1 ">Ver todos los pedidos</div>
                </div>
              </div>

              <div class="overflow-scroll scroll-bar-1 pt-30">
                <table class="table-2 col-12">
                  <thead class="">
                    <tr class="text-center">
                      <th>Número de orden</th>
                      <th>Items</th>
                      <th>Total</th>
                      <th>Estado</th>
                      <th>Fecha de Pedido</th>
                      <th>Fecha de Entrega</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody class="text-center">

                    <?php
                    $pedido_query = "SELECT * FROM Carrito WHERE emailCli = '$user' ORDER BY idCarrito DESC LIMIT 2";
                    $result = consultar("localhost", "root", "", $pedido_query);
                    $lastOrderId = null; // Variable para rastrear la última orden procesada

                    while ($reg = mysqli_fetch_array($result)) :
                      $idCarrito = $reg['idCarrito'];
                      $totalPagado = $reg['totalPagar'];
                      $estado = $reg['estadoPedido'];

                      if (is_null($reg['fechaEntrega'])) {
                        $fechaEntrega = 'En trámite';
                      } else {
                        $fechaEntrega = date("d/m/Y", strtotime($reg['fechaEntrega']));
                      }

                      $cantidad_query = "SELECT * FROM Cantidad WHERE idCarrito = '$idCarrito'";
                      $result_cantidad = consultar("localhost", "root", "", $cantidad_query);
                      $hay_prducts = mysqli_num_rows($result_cantidad);

                      if ($hay_prducts) {
                        $prod = array();
                        while ($fila = mysqli_fetch_array($result_cantidad)) :
                          $idCaract = $fila['idCaracteristica'];
                          $prod_query = "SELECT * FROM Caracteristica JOIN Producto ON Caracteristica.idCaracteristica = '$idCaract' AND Producto.idProducto = Caracteristica.idProducto";
                          $result_prod = consultar("localhost", "root", "", $prod_query);

                          while ($reg_prod = mysqli_fetch_array($result_prod)) :
                            $cantidad = $fila['cantidad'];
                            $categoria = $reg_prod['nombreCat'];

                            if ($categoria == 'creatina' or $categoria == 'proteina' or $categoria == 'pre_workout' or $categoria == 'energia') {
                              array_push($prod, $cantidad . " x " . $reg_prod['nombre'] . " / " . $reg_prod['talla'] . "g / sabor: " . $reg_prod['color']);
                            } else {
                              array_push($prod, $cantidad . " x " . $reg_prod['nombre'] . " / " . $reg_prod['talla'] . "/ color: " . $reg_prod['color']);
                            }

                            $precio = $reg_prod['precio'];
                            $descuento = $reg_prod['descuento'];
                            $precio_des = $precio - (($precio * $descuento) / 100);
                            $subtotal = $cantidad * $precio_des;
                          endwhile;

                        endwhile;

                        // Verificar si esta orden es diferente a la anterior para imprimir la fila
                        if ($lastOrderId !== $idCarrito) {
                    ?>
                          <tr>
                            <td>#<?= $idCarrito ?></td>
                            <td> <?php
                                  // Supongamos que $prod es un array
                                  foreach ($prod as $valor) {
                                    echo $valor . '<br>';
                                  }
                                  ?>
                            </td>
                            <td class="fw-500"><?php echo number_format($totalPagado, 2, '.', ',') . "€";  ?></td>
                            <?php
                            switch ($estado) {
                              case 'COMPLETED':
                                echo '<td class="d-flex justify-center"><div class="rounded-100 py-4 col-12 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmado</div></td>';
                                break;

                              case 'CANCELED':
                                echo '<td class="d-flex justify-center"><div class="rounded-100 py-4 text-center col-12 text-14 fw-500 bg-red-3 text-red-2">Cancelado</div></td>';
                                break;

                              case 'PREPARED':
                                echo '<td class="d-flex justify-center"><div class="rounded-100 py-4 text-center col-12 text-14 fw-500 bg-brown-1 text-white">Preparado</div></td>';
                                break;

                              case 'COMING':
                                echo '<td class="d-flex justify-center"><div class="rounded-100 py-4 text-center col-12 text-14 fw-500 bg-green-2 text-white">En camino</div></td>';
                                break;

                              case 'DELIVERED':
                                echo '<td class="d-flex justify-center"><div class="rounded-100 py-4 text-center col-12 text-14 fw-500 bg-success-2 text-white">Entregado</div></td>';
                                break;

                              case 'RETURNED':
                                echo '<td class="d-flex justify-center"><div class="rounded-100 py-4 text-center col-12 text-14 fw-500 bg-yellow-4 text-yellow-3">Devuelto</div></td>';
                                break;
                            } ?>
                            <td><?= date("d/m/Y", strtotime($reg['fecha'])) ?><br><?= $reg['hora'] ?></td>
                            <td><?= $fechaEntrega ?></td>
                            <td>
                              <div onclick="showDetails('<?= $idCarrito ?>')" style="border-radius: 10px !important; cursor: pointer;" class="px-4 py-10 text-center col-8 text-14 fw-500 bg-dark-1 text-white">Ver detalles</div>
                            </td>
                          </tr>
                    <?php
                        }
                        // Actualizar el último ID de orden
                        $lastOrderId = $idCarrito;
                      } else {
                        echo '<tr class="text-center"><td colspan = "4" class="text-center"><b>Lista vacía</b></td></tr>';
                      }
                    endwhile;
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript -->

  <script src="../js/vendors.js"></script>
  <script src="../js/main.js"></script>
  <script src="../alertifyjs/alertify.js"></script>
  <script src="../js/jquery-3.6.1.min.js"></script>
</body>

</html>

<script>
  function showDetails(idCarrito) {
    var confirmacionWindow = window.open("confirmacion.php?transaccion=" + idCarrito, "_blank");
  }
</script>