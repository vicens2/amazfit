<?php
include('../conexion.php');

session_start();
$user = $_SESSION['user'];
$num_cart = 0;

if (isset($_SESSION['carrito']['producto'])) {
  $num_cart = count($_SESSION['carrito']['producto']);
}

// Verificar si el parámetro 'nomCat' está presente en la URL
if (isset($_GET['producto'])) {
  // Obtener el valor del parámetro 'nomCat'
  $producto = $_GET['producto'];
}
$producto_query = "SELECT * FROM Producto WHERE idProducto = '$producto'";
$result = consultar("localhost", "root", "", $producto_query);
$reg = mysqli_fetch_array($result);


$producto_data = [
  'nombre' => $reg['nombre'],
  'descripcion' => $reg['descripcion'],
  'precio' => $reg['precio'],
  'stock' => $reg['stock'],
  'categoria' => $reg['nombreCat'],
];

$idProd = $reg['idProducto'];
$carac_query = "SELECT emailVen FROM Caracteristica WHERE idProducto = '$idProd' LIMIT 1";
$result_carac = consultar("localhost", "root", "", $carac_query);
$reg_carac = mysqli_fetch_array($result_carac);
$emailVen = $reg_carac['emailVen'];

$ven_query = "SELECT * FROM UsuVen WHERE emailVen = '$emailVen'";
$resultVen = consultar("localhost", "root", "", $ven_query);
$reg_ven = mysqli_fetch_array($resultVen);

$ven_data = [
  'nombre' => $reg_ven['nombre'],
  'telefono' => $reg_ven['telefono'],
  'email' => $reg_ven['emailVen'],
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
  <link rel="stylesheet" type="text/css" href="../alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="../alertifyjs/css/themes/default.css">
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    main {
      flex: 1;
    }
  </style>

  <link rel="stylesheet" type="text/css" href="../alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="../alertifyjs/css/themes/default.css">
  <title>AmazFit</title>
</head>

<body>
  <main>


    <div class="header-margin"></div>
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

    <header data-add-bg="" class="header bg-dark-1 js-header" data-x="header" data-x-toggle="is-menu-opened">
      <div data-anim="fade" class="header__container container">
        <div class="row justify-between items-center">

          <div class="col-auto">
            <div class="d-flex items-center">
              <a href="../index.php" class="header-logo mr-20" data-x="header-logo" data-x-toggle="is-logo-dark">
                <img src="../img/general/logo-light.svg" alt="logo icon">
                <img src="../img/general/logo-dark.svg" alt="logo icon">
              </a>
            </div>
          </div>


          <div class="col-auto">
            <div class="d-flex items-center">

              <div class="header-menu " data-x="mobile-menu" data-x-toggle="is-menu-active">
                <div class="mobile-overlay"></div>

                <div class="header-menu__content">
                  <div class="mobile-bg js-mobile-bg"></div>

                  <div class="menu js-navList">
                    <ul class="menu__nav text-white -is-active">

                      <li class="menu-item-has-children">
                        <a data-barba href="">
                          <span class="mr-10">Nutrición</span>
                          <i class="icon icon-chevron-sm-down"></i>
                        </a>

                        <ul class="subnav">
                          <li class="subnav__backBtn js-nav-list-back">
                            <a href="#"><i class="icon icon-chevron-sm-down"></i> Nutrición</a>
                          </li>

                          <li><a href=" categorias.php?nomCat=creatina">Creatina</a></li>

                          <li><a href=" categorias.php?nomCat=proteina">Proteína</a></li>

                          <li><a href=" categorias.php?nomCat=pre_workout">Pre Workout</a></li>

                          <li><a href=" categorias.php?nomCat=energia">Energía</a></li>

                        </ul>

                      </li>

                      <li class="menu-item-has-children">
                        <a data-barba href="">
                          <span class="mr-10">Hombre</span>
                          <i class="icon icon-chevron-sm-down"></i>
                        </a>

                        <ul class="subnav">
                          <li class="subnav__backBtn js-nav-list-back">
                            <a href="#"><i class="icon icon-chevron-sm-down"></i> Hombre</a>
                          </li>

                          <li><a href=" categorias.php?nomCat=camisetaH">Camiseta</a></li>

                          <li><a href=" categorias.php?nomCat=tirantes">Tirantes</a></li>

                          <li><a href=" categorias.php?nomCat=sudaderaH">Sudaderas</a></li>

                          <li><a href=" categorias.php?nomCat=pantalon_corto">Pantalónes cortos</a></li>

                          <li><a href=" categorias.php?nomCat=pantalon_largo">Pantalones largos</a></li>

                        </ul>

                      </li>

                      <li class="menu-item-has-children">
                        <a data-barba href="">
                          <span class="mr-10">Mujer</span>
                          <i class="icon icon-chevron-sm-down"></i>
                        </a>

                        <ul class="subnav">
                          <li class="subnav__backBtn js-nav-list-back">
                            <a href="#"><i class="icon icon-chevron-sm-down"></i> Mujer</a>
                          </li>

                          <li><a href=" categorias.php?nomCat=camisetaM">Camiseta</a></li>

                          <li><a href=" categorias.php?nomCat=crop_top">Crop Tops</a></li>

                          <li><a href=" categorias.php?nomCat=sudaderaM">Sudaderas</a></li>

                          <li><a href=" categorias.php?nomCat=pantalon_cortoM">Pantalónes cortos</a></li>

                          <li><a href=" categorias.php?nomCat=leggins">Leggins</a></li>

                        </ul>

                      </li>
                      <li class="menu-item-has-children">
                        <a data-barba href="">
                          <span class="mr-10">Accesorios</span>
                          <i class="icon icon-chevron-sm-down"></i>
                        </a>

                        <ul class="subnav">
                          <li class="subnav__backBtn js-nav-list-back">
                            <a href="#"><i class="icon icon-chevron-sm-down"></i> Accesorios</a>
                          </li>

                          <li><a href=" categorias.php?nomCat=cascos">Cascos</a></li>

                          <li><a href=" categorias.php?nomCat=gorras">Gorras</a></li>

                          <li><a href=" categorias.php?nomCat=mochilas">Mochilas</a></li>

                          <li><a href=" categorias.php?nomCat=calcetines">Calcetines</a></li>

                          <li><a href=" categorias.php?nomCat=chanclas">Chanclas</a></li>

                        </ul>
                      </li>
                    </ul>
                  </div>

                  <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                  </div>
                </div>
              </div>


              <?php
              // Verifica si la sesión 'user' está establecida y tiene un valor
              if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
                // La sesión 'user' está establecida, muestra el icono
                echo '<div class="ml-20"><a style="color: white;" href="client_dash.php" class="d-flex items-center icon-user text-inherit text-22"></a></div>';
              } else {
              ?>

                <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">
                  <a href="login.php" class="button px-30 fw-400 text-14 -blue-1 bg-white h-50 text-dark-1">Inicia Sesión</a>
                  <a href="signup.php" class="button px-30 fw-400 text-14 border-white -blue-1 h-50 text-white ml-20">Regístrate</a>
                </div>
              <?php
              }
              ?>

              <div class="d-none xl:d-flex x-gap-20 items-center pl-30 text-white" data-x="header-mobile-icons" data-x-toggle="text-white">
                <div><a href="login.php" class="d-flex items-center icon-user text-inherit text-22"></a></div>
                <div><button class="d-flex items-center icon-menu text-inherit text-20" data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button></div>
              </div>

              <a href="checkout.php" class="button px-5 fw-400 rounded-full text-14 border-white -blue-1 h-50 text-white ml-20" aria-label="Cesta">
                <span class="responsiveFlyoutBasket_icon_container">
                  <svg fill="#FFFF" class="text-13 text-light fw-500 responsiveFlyoutBasket_icon responsiveFlyoutBasket_icon-basket" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M6.57412994,10 L17.3932043,10 L13.37,4.18336196 L15.0021928,3 L19.8438952,10 L21,10 C21.5522847,10 22,10.4477153 22,11 C22,11.5522847 21.5522847,12 21,12 L17.5278769,19.8122769 C17.2068742,20.534533 16.4906313,21 15.7002538,21 L8.29974618,21 C7.50936875,21 6.79312576,20.534533 6.47212308,19.8122769 L3,12 C2.44771525,12 2,11.5522847 2,11 C2,10.4477153 2.44771525,10 3,10 L4.11632272,10 L9,3 L10.6274669,4.19016504 L6.57412994,10 Z M5.18999958,12 L8.29999924,19 L15.6962585,19 L18.8099995,12 L5.18999958,12 Z"></path>
                  </svg>

                  <span class="responsiveFlyoutBasket_itemsCount badge" data-js-element="itemsCount" id="count_carrito">
                    <?= $num_cart ?>
                  </span>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="pt-40">
      <div class="container">
        <div class="row justify-between items-end">
          <div class="col-auto">
            <h1 class="text-26 fw-600"><?= $producto_data['nombre'] ?></h1>

            <div class="d-flex x-gap-5 items-center pt-5">
              <i class="icon-star text-16 text-light-1"></i>
              <div class="text-15 text-light-1"><?= $producto_data['categoria'] ?> </div>
              <a href="categorias.php?nomCat=<?= $producto_data['categoria'] ?> " class="text-15 text-blue-1 underline">Consulta más productos relacionados</a>
            </div>
          </div>

          <div class="col-auto">
            <div class="row x-gap-10 y-gap-10">
              <div class="col-auto">
                <button class="button px-15 py-10 -blue-1">
                  <i class="icon-share mr-10"></i>
                  Compartir
                </button>
              </div>

              <div class="col-auto">
                <button class="button px-15 py-10 -blue-1 bg-light-2">
                  <i class="icon-heart mr-10"></i>
                  Favorito
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pt-40">
      <div class="container js-pin-container">
        <div class="row y-gap-30">
          <div class="col-lg-8">
            <div class="cruiseSlider">
              <div class="cruiseSlider-slider relative">
                <div class="d-flex js-cruise-slider">
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <img src="../img/lists/cruise/single/1.png" alt="image" class="rounded-4">
                    </div>

                    <div class="swiper-slide">
                      <img src="../img/lists/cruise/single/2.png" alt="image" class="rounded-4">
                    </div>

                    <div class="swiper-slide">
                      <img src="../img/lists/cruise/single/3.png" alt="image" class="rounded-4">
                    </div>

                    <div class="swiper-slide">
                      <img src="../img/lists/cruise/single/4.png" alt="image" class="rounded-4">
                    </div>

                    <div class="swiper-slide">
                      <img src="../img/lists/cruise/single/5.png" alt="image" class="rounded-4">
                    </div>

                  </div>

                  <div class="cruiseSlider__nav -prev js-prev">
                    <button class="button -outline-white size-50 flex-center text-white rounded-full">
                      <i class="icon-arrow-left"></i>
                    </button>
                  </div>

                  <div class="cruiseSlider__nav -next js-next">
                    <button class="button -outline-white size-50 flex-center text-white rounded-full">
                      <i class="icon-arrow-right"></i>
                    </button>
                  </div>

                  <div class="absolute h-full col-12 px-20 py-20 d-flex justify-end items-end">
                    <a href="../img/lists/cruise/single/1.png" class="button px-24 py-15 -blue-1 bg-white z-2 js-gallery" data-gallery="gallery2">
                      Visualiza las imágenes
                    </a>

                    <a href="../img/lists/cruise/single/2.png" class="js-gallery" data-gallery="gallery2"></a>

                    <a href="../img/lists/cruise/single/3.png" class="js-gallery" data-gallery="gallery2"></a>

                    <a href="../img/lists/cruise/single/4.png" class="js-gallery" data-gallery="gallery2"></a>

                    <a href="../img/lists/cruise/single/5.png" class="js-gallery" data-gallery="gallery2"></a>

                  </div>
                </div>
              </div>

              <div class="cruiseSlider-slides row x-gap-10 y-gap-10 pt-10 js-cruise-slides">

                <div class="col-auto w-max-120">
                  <div class="cruiseSlider-slides__item h-full rounded-4 -is-active js-item">
                    <img src="../img/lists/cruise/single/1.png" alt="image" class="h-full object-cover">
                  </div>
                </div>

                <div class="col-auto w-max-120">
                  <div class="cruiseSlider-slides__item h-full rounded-4  js-item">
                    <img src="../img/lists/cruise/single/2.png" alt="image" class="h-full object-cover">
                  </div>
                </div>

                <div class="col-auto w-max-120">
                  <div class="cruiseSlider-slides__item h-full rounded-4  js-item">
                    <img src="../img/lists/cruise/single/3.png" alt="image" class="h-full object-cover">
                  </div>
                </div>

                <div class="col-auto w-max-120">
                  <div class="cruiseSlider-slides__item h-full rounded-4  js-item">
                    <img src="../img/lists/cruise/single/4.png" alt="image" class="h-full object-cover">
                  </div>
                </div>

                <div class="col-auto w-max-120">
                  <div class="cruiseSlider-slides__item h-full rounded-4  js-item">
                    <img src="../img/lists/cruise/single/5.png" alt="image" class="h-full object-cover">
                  </div>
                </div>

              </div>
            </div>

            <div class="row x-gap-80 y-gap-40 pt-40">
              <div class="col-12">
                <h3 class="text-22 fw-500">Descripción</h3>
                <p class="text-dark-1 text-15 mt-20">
                  <?= $producto_data['descripcion'] ?>
                </p>
              </div>

              <div class="col-12">
                <h5 class="text-16 fw-500">Vendedor</h5>

                <ul class="list-disc text-15 mt-10">
                  <li><b>Nombre:</b> <?= $ven_data['nombre'] ?> </li>
                  <li><b>Email:</b> <?= $ven_data['email'] ?></li>
                  <li><b>Teléfono:</b> <?= $ven_data['telefono'] ?></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="d-flex justify-end js-pin-content" data-offset="350">
              <div class="px-30 py-30 rounded-4 border-light bg-white w-360 lg:w-full shadow-4">

                <div class="row y-gap-20 pt-30">
                  <div class="col-12">
                    <div class="select js-select js-liveSearch" data-select-value="">

                      <button class="select__button js-button">
                        <?php if ($producto_data['categoria'] == 'creatina' or $producto_data['categoria'] == 'proteina' or $producto_data['categoria'] == 'pre_workout' or $producto_data['categoria'] == 'energia') {
                        ?>
                          <span class="js-button-title text-15 fw-500 ls-2 lh-16">Seleccione un sabor </span>
                        <?php
                        } else { ?>
                          <span class="js-button-title text-15 fw-500 ls-2 lh-16">Seleccione un color </span>
                        <?php } ?>
                        <i class="select__icon" data-feather="chevron-down"></i>
                      </button>

                      <div class="select__dropdown js-dropdown">
                        <input type="text" placeholder="Search" class="select__search js-search">

                        <div class="select__options js-options">
                          <?php
                          $carac_query = "SELECT DISTINCT (color) FROM Caracteristica WHERE idProducto = '$idProd'";
                          $result_carac = consultar("localhost", "root", "", $carac_query);
                          while ($reg_carac = mysqli_fetch_array($result_carac)) :
                          ?>
                            <div class="select__options__button" data-value="banking"><?= $reg_carac['color'] ?></div>
                          <?php
                          endwhile;
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="px-20 py-20 rounded-4 bg-white border-light">
                      <?php if ($producto_data['categoria'] == 'creatina' or $producto_data['categoria'] == 'proteina' or $producto_data['categoria'] == 'pre_workout' or $producto_data['categoria'] == 'energia') {
                      ?>
                        <h4 class="text-15 fw-500 ls-2 lh-16">Cantidad (g): </h4>
                      <?php
                      } else { ?>
                        <h4 class="text-15 fw-500 ls-2 lh-16">Talla: </h4>
                      <?php } ?>

                      <div style="justify-content: space-around;" class="row x-gap-10 y-gap-10 pt-10">
                        <?php
                        $carac_query = "SELECT DISTINCT (talla) FROM Caracteristica WHERE idProducto = '$idProd'";
                        $result_carac = consultar("localhost", "root", "", $carac_query);
                        while ($reg_carac = mysqli_fetch_array($result_carac)) :
                        ?>
                          <div class="col-auto">
                            <div class="button -blue-1 bg-blue-1-05 text-blue-1 py-10 px-20 rounded-100" onclick="selectTalla(this)"><?= $reg_carac['talla'] ?></div>
                          </div>
                        <?php
                        endwhile;
                        ?>
                      </div>
                    </div>
                  </div>
                  <div class="container mt-20 mb-20">
                    <p class="text-light fw-500 text-13 text-center">Envío Península y Baleares Gratis a partir de 55€</p>
                    <div class="border-top-light"></div>
                  </div>

                  <div class="col-12">
                    <div class="row y-gap-10 justify-between items-center">
                      <div class="col-auto">
                        <div class="text-15 fw-500">Unidades</div>
                      </div>

                      <div class="col-auto">
                        <div class="d-flex items-center js-counter" data-value-change=".js-count-adult">
                          <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                            <i class="icon-minus text-12"></i>
                          </button>

                          <div class="flex-center size-20 ml-15 mr-15">
                            <div class="text-15 js-count">1</div>
                          </div>

                          <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                            <i class="icon-plus text-12"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="container mt-20 ">
                    <div class="border-top-light"></div>
                  </div>
                  <div class="d-flex justify-between items-center">
                    <div class="text-14 text-light-1">
                      <span class="price_product text-20 fw-500 text-dark-1 ml-5"><?= $producto_data['precio'] ?>€</span>
                    </div>
                    <p class="text-green-2 fw-500 text-14 text-center">Stock</p>
                  </div>
                  <div class="col-12">
                    <button onclick="addProducto( '<?= $producto ?>', '<?= $user ?>', 1 ) " class="button -dark-1 py-15 px-35 h-60 col-12 rounded-4 bg-blue-1 text-white">
                      Comprar ahora
                    </button>
                    <button onclick="addProducto( '<?= $producto ?>', '<?= $user ?>', 0 ) " class="button py-15 px-35 h-60 col-12 -text-green-2 bg-green-2 text-white rounded-4 mt-2">
                      Agregar al carrito
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  <footer class="footer -type-2 bg-dark-2 text-white">
    <div class="container">
      <div class="pt-60 pb-60">
        <div class="row y-gap-40 justify-between xl:justify-center">
          <div class="col-xl-6 col-lg-6">
            <img src="../img/general/logo-light.svg" alt="image">


            <div class="mt-60">
              <h5 class="text-16 fw-500 mb-10">Follow us on social media</h5>

              <div class="d-flex x-gap-20 items-center">
                <a href="#"><i class="icon-facebook text-14"></i></a>
                <a href="#"><i class="icon-twitter text-14"></i></a>
                <a href="#"><i class="icon-instagram text-14"></i></a>
                <a href="#"><i class="icon-linkedin text-14"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">

            <div class="col-lg-6 col-sm-6">
              <h5 class="text-16 fw-500 mb-30">Company</h5>
              <div class="d-flex y-gap-5 flex-column">
                <a href="#">About Us</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms and Conditions</a>
                <a href="#">Contact</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="py-20 border-top-white-15">
      <div class="text-center items-center">
        © 2023 AmazFit LLC All rights reserved. Developed With ❤ From Alejandro & Viçens
      </div>
    </div>
    </div>
  </footer>
  <script src="../js/vendors.js"></script>
  <script src="../js/main.js"></script>
  <script src="../alertifyjs/alertify.js"></script>
  <script src="../js/jquery-3.6.1.min.js"></script>
</body>

</html>

<script>
  $(document).ready(function() {
    var counterContainer = $('.js-counter');
    var countElement = counterContainer.find('.js-count');
    var incrementButton = counterContainer.find('.js-up');
    var decrementButton = counterContainer.find('.js-down');
    var priceElement = $('.price_product'); // Ajusta el selector según tu estructura HTML
    var unitPrice = <?= $producto_data['precio'] ?>; // Precio unitario
    var minValue = 1;
    var maxValue = <?= $producto_data['stock'] ?>;

    // Función para actualizar el precio
    function updatePrice() {
      var currentValue = parseInt(countElement.text(), 10);
      var totalPrice = unitPrice * currentValue;
      priceElement.text(totalPrice.toFixed(2) + '€'); // Ajusta el formato del precio según tus necesidades
    }

    // Función para incrementar el contador
    incrementButton.on('click', function() {
      var currentValue = parseInt(countElement.text(), 10);
      if (currentValue < maxValue) {
        countElement.text(currentValue + 1);
        updatePrice();
      }
    });

    // Función para decrementar el contador
    decrementButton.on('click', function() {
      var currentValue = parseInt(countElement.text(), 10);
      if (currentValue > minValue) {
        countElement.text(currentValue - 1);
        updatePrice();
      }
    });
  });


  var selectedElement = null;

  var selectedValue;

  function selectTalla(element) {
    // Deseleccionar el elemento previamente seleccionado
    if (selectedElement !== null) {
      selectedElement.style.backgroundColor = "rgba(53, 84, 209, 0.05)";
      selectedElement.style.color = "#3554D1"; // Restaurar el fondo original
    }

    // Seleccionar el nuevo elemento
    element.style.backgroundColor = "#3554D1";
    element.style.color = "#fff";
    selectedElement = element;

    // Obtener el valor seleccionado
    const selectedVa = element.innerText;
    selectedValue = selectedVa;
  }

  function addProducto(idProducto, user, check) {
    let selectT = $(".js-button-title").text();
    let cantidad = $(".js-count").text();

    console.log(selectT);
    console.log(selectedValue);
    console.log(cantidad);
    if (selectT === 'Seleccione un sabor ' || selectT === 'Seleccione un color ') {
      alertify.error("Por favor, seleccione un sabor/color", 3);
      return;
    }
    if (!selectedValue) {
      alertify.error("Por favor, seleccione una cantidad/talla", 3);
      return;
    }

    $.post('carrito.php', {
        producto: idProducto,
        cantidad: cantidad,
        color: selectT,
        talla: selectedValue,
        user: user
      },
      function(data) {
        const d = JSON.parse(data);
        console.log(data);
        if (d.ok) {
          let carrito = document.getElementById("count_carrito");
          console.log(carrito);
          carrito.innerHTML = d.numero;
          alertify.success("El producto: <?= $producto_data['nombre'] ?>, se ha agregado correctamente al carrito");
          if (check === 1) {
            location.href = "checkout.php"
          }
        }
      });
  }
</script>