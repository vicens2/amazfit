<?php
include('conexion.php');
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
  <link rel="stylesheet" href="css/vendors.css">
  <link rel="stylesheet" href="css/main.css">
  <style>
    /* Cambiar el color del trazo del SVG al pasar el ratón por encima */
    #mySvg {
      transition: stroke 0.3s ease-out;
      /* Agrega una transición suave al color del trazo */
    }

    #mySvg:hover {
      stroke: #ffffff;
      /* Cambia el color del trazo al pasar el ratón por encima */
    }

    /* Cambiar el fondo del div que envuelve al SVG al pasar el ratón por encima */
    .tourTypeCard:hover {
      background-color: #ffffff;
      /* Cambia el color de fondo al pasar el ratón por encima */
    }
  </style>
  <title>AmazFit</title>
</head>

<body>

  <main>

    <?php
    include('header.php');
    ?>


    <section data-anim-wrap class="masthead -type-6">
      <div data-anim-child="fade" class="masthead__bg bg-dark-3">
        <img src="img/backgrounds/imageBack.jpg" alt="image">
      </div>

      <div class="container">
        <div class="row justify-center">
          <div class="col-xl-9">
            <div class="text-center">
              <h1 data-anim-child="slide-up delay-4" class="text-60 lg:text-40 md:text-30 text-white">Encuentra los mejores productos Fitness</h1>
              <p data-anim-child="slide-up delay-5" class="text-white mt-5">Las mejores marcas al mejor precio</p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-md layout-pb-md bg-light-2">
      <div class="container">
        <div class="row y-gap-30">

          <div class="col-lg-4 col-md-6">
            <div class="d-flex pr-30">
              <img class="size-50" src="img/featureIcons/1/1.svg" alt="image">

              <div style="align-items: center;display: flex;" class="ml-15">
                <h4 class="text-18 fw-500">Mejor precio garantizado</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="d-flex pr-30">
              <img class="size-50" src="img/featureIcons/1/2.svg" alt="image">

              <div style="align-items: center;display: flex;" class="ml-15">
                <h4 class="text-18 fw-500">Encuntra lo que buscas de manera fácil y rápida</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="d-flex pr-30">
              <img class="size-50" src="img/featureIcons/1/3.svg" alt="image">

              <div style="align-items: center;display: flex;" class="ml-15">
                <h4 class="text-18 fw-500">Atención al cliente 24/7</h4>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="layout-pt-lg layout-pb-md">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Ofertas especiales</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Descubre las mejores ofertas de nuestro catálogo</p>
            </div>
          </div>
        </div>

        <div class="row y-gap-20 pt-40">
          <div data-anim-child="slide-up delay-2" class="col-lg-4 col-sm-6">

            <div class="ctaCard -type-1 rounded-4 -no-overlay">
              <div class="ctaCard__image ratio ratio-41:35">
                <img class="img-ratio js-lazy" src="#" data-src="img/backgrounds/proteina.jpg" alt="image">
              </div>

              <div class="ctaCard__content py-50 px-50 xl:py-30 xl:px-30">


                <h4 class="text-30 xl:text-24 text-white">Descubre los diferentes tipos de proteína</h4>

                <div class="d-inline-block mt-30">
                  <a href="BD204305407Z/categorias.php?nomCat=proteina" class="button px-48 py-15 -blue-1 -min-180 bg-white text-dark-1">Consulta precios</a>
                </div>
              </div>
            </div>

          </div>

          <div data-anim-child="slide-up delay-3" class="col-lg-4 col-sm-6">

            <div class="ctaCard -type-1 rounded-4 -no-overlay">
              <div class="ctaCard__image ratio ratio-41:35">
                <img class="img-ratio js-lazy" src="#" data-src="img/backgrounds/sudadera.jpg" alt="image">
              </div>

              <div class="ctaCard__content py-50 px-50 xl:py-30 xl:px-30">

                <h4 class="text-30 xl:text-24 text-white">Descuento en Sudaderas de hasta el 50%!</h4>

                <div class="d-inline-block mt-30">
                  <a href="BD204305407Z/categorias.php?nomCat=sudaderaH" class="button px-48 py-15 -blue-1 -min-180 bg-white text-dark-1">Consulta precios</a>
                </div>
              </div>
            </div>

          </div>

          <div data-anim-child="slide-up delay-4" class="col-lg-4 col-sm-6">

            <div class="ctaCard -type-1 rounded-4 -no-overlay">
              <div class="ctaCard__image ratio ratio-41:35">
                <img class="img-ratio js-lazy" src="#" data-src="img/backgrounds/accesorios.jpg" alt="image">
              </div>

              <div class="ctaCard__content py-50 px-50 xl:py-30 xl:px-30">


                <h4 class="text-30 xl:text-24 text-white">Los mejores Accesorios para tu deporte</h4>

                <div class="d-inline-block mt-30">
                  <a href="BD204305407Z/categorias.php?nomCat=gorras" class="button px-48 py-15 -blue-1 -min-180 bg-white text-dark-1">Consulta precios</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-md layout-pb-md">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Best Seller Nutrición</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">La suplementación más vendida</p>
            </div>
          </div>
        </div>

        <div class="row y-gap-30 pt-40 sm:pt-20">

          <?php
          // Inicializar un contador
          $product_query = "SELECT * FROM Producto WHERE nombreCat = 'creatina' AND activo = 1 LIMIT 1";
          $result = consultar("localhost", "root", "", $product_query);
          $fila = mysqli_fetch_array($result);
          $idProd = $fila['idProducto'];
          ?>

          <div data-anim-child="slide-up delay-2" class="col-xl-3 col-lg-3 col-sm-6">

            <a href="BD204305407Z/producto.php?producto=<?= $idProd ?>" class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="img/activities/1.png" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                  <div class="cardImage__leftBadge">
                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                      Best Seller
                    </div>
                  </div>

                </div>

              </div>

              <div class="activityCard__content mt-10">
                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-18">
                  <span><?= $fila['nombre'] ?></span>
                </h4>

                <?php
                $carac_query = "SELECT emailVen FROM Caracteristica WHERE idProducto = '$idProd' LIMIT 1";
                $result_carac = consultar("localhost", "root", "", $carac_query);
                $reg_carac = mysqli_fetch_array($result_carac);
                $emailVen = $reg_carac['emailVen'];

                $ven_query = "SELECT nombre FROM UsuVen WHERE emailVen = '$emailVen'";
                $result_ven = consultar("localhost", "root", "", $ven_query);
                $reg = mysqli_fetch_array($result_ven);
                ?>
                <p class="text-light-1 lh-14 text-14 mt-5"> <b>Vendedor: </b> <?= $reg['nombre'] ?></p>

                <div class="mt-5">
                  <div class="fw-500">
                    <span class="text-blue-1"><?= $fila['precio'] ?> €</span>
                  </div>
                </div>
              </div>
            </a>

          </div>

          <?php
          // Inicializar un contador
          $product_query = "SELECT * FROM Producto WHERE nombreCat = 'proteina' AND activo = 1 LIMIT 1";
          $result = consultar("localhost", "root", "", $product_query);
          $fila = mysqli_fetch_array($result);
          $idProd = $fila['idProducto'];
          ?>

          <div data-anim-child="slide-up delay-2" class="col-xl-3 col-lg-3 col-sm-6">

            <a href="BD204305407Z/producto.php?producto=<?= $idProd ?>" class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="img/activities/1.png" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                  <div class="cardImage__leftBadge">
                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                      Best Seller
                    </div>
                  </div>

                </div>

              </div>

              <div class="activityCard__content mt-10">
                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-18">
                  <span><?= $fila['nombre'] ?></span>
                </h4>

                <?php
                $carac_query = "SELECT emailVen FROM Caracteristica WHERE idProducto = '$idProd' LIMIT 1";
                $result_carac = consultar("localhost", "root", "", $carac_query);
                $reg_carac = mysqli_fetch_array($result_carac);
                $emailVen = $reg_carac['emailVen'];

                $ven_query = "SELECT nombre FROM UsuVen WHERE emailVen = '$emailVen'";
                $result_ven = consultar("localhost", "root", "", $ven_query);
                $reg = mysqli_fetch_array($result_ven);
                ?>
                <p class="text-light-1 lh-14 text-14 mt-5"> <b>Vendedor: </b> <?= $reg['nombre'] ?></p>

                <div class="mt-5">
                  <div class="fw-500">
                    <span class="text-blue-1"><?= $fila['precio'] ?> €</span>
                  </div>
                </div>
              </div>
            </a>

          </div>

          <?php
          // Inicializar un contador
          $product_query = "SELECT * FROM Producto WHERE nombreCat = 'pre_workout' AND activo = 1 LIMIT 1";
          $result = consultar("localhost", "root", "", $product_query);
          $fila = mysqli_fetch_array($result);
          $idProd = $fila['idProducto'];
          ?>

          <div data-anim-child="slide-up delay-2" class="col-xl-3 col-lg-3 col-sm-6">

            <a href="BD204305407Z/producto.php?producto=<?= $idProd ?>" class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="img/activities/1.png" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                  <div class="cardImage__leftBadge">
                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                      Best Seller
                    </div>
                  </div>

                </div>

              </div>

              <div class="activityCard__content mt-10">
                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-18">
                  <span><?= $fila['nombre'] ?></span>
                </h4>

                <?php
                $carac_query = "SELECT emailVen FROM Caracteristica WHERE idProducto = '$idProd' LIMIT 1";
                $result_carac = consultar("localhost", "root", "", $carac_query);
                $reg_carac = mysqli_fetch_array($result_carac);
                $emailVen = $reg_carac['emailVen'];

                $ven_query = "SELECT nombre FROM UsuVen WHERE emailVen = '$emailVen'";
                $result_ven = consultar("localhost", "root", "", $ven_query);
                $reg = mysqli_fetch_array($result_ven);
                ?>
                <p class="text-light-1 lh-14 text-14 mt-5"> <b>Vendedor: </b> <?= $reg['nombre'] ?></p>

                <div class="mt-5">
                  <div class="fw-500">
                    <span class="text-blue-1"><?= $fila['precio'] ?> €</span>
                  </div>
                </div>
              </div>
            </a>

          </div>

          <?php
          // Inicializar un contador
          $product_query = "SELECT * FROM Producto WHERE nombreCat = 'energia' AND activo = 1 LIMIT 1";
          $result = consultar("localhost", "root", "", $product_query);
          $fila = mysqli_fetch_array($result);
          $idProd = $fila['idProducto'];
          ?>

          <div data-anim-child="slide-up delay-2" class="col-xl-3 col-lg-3 col-sm-6">

            <a href="BD204305407Z/producto.php?producto=<?= $idProd ?>" class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="img/activities/1.png" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                  <div class="cardImage__leftBadge">
                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                      Best Seller
                    </div>
                  </div>

                </div>

              </div>

              <div class="activityCard__content mt-10">
                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-18">
                  <span><?= $fila['nombre'] ?></span>
                </h4>

                <?php

                $carac_query = "SELECT emailVen FROM Caracteristica WHERE idProducto = '$idProd' LIMIT 1";
                $result_carac = consultar("localhost", "root", "", $carac_query);
                $reg_carac = mysqli_fetch_array($result_carac);
                $emailVen = $reg_carac['emailVen'];

                $ven_query = "SELECT nombre FROM UsuVen WHERE emailVen = '$emailVen'";
                $result_ven = consultar("localhost", "root", "", $ven_query);
                $reg = mysqli_fetch_array($result_ven);
                ?>
                <p class="text-light-1 lh-14 text-14 mt-5"> <b>Vendedor: </b> <?= $reg['nombre'] ?></p>

                <div class="mt-5">
                  <div class="fw-500">
                    <span class="text-blue-1"><?= $fila['precio'] ?> €</span>
                  </div>
                </div>
              </div>
            </a>

          </div>

        </div>
      </div>
    </section>

    <section class="layout-pt-md layout-pb-md">
      <div class="container">
        <div class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Prendas</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Las mejores prendas deportivas al mejor precio</p>
            </div>
          </div>
        </div>

        <div class="row y-gap-30 pt-40 sm:pt-20">

          <div class="col-xl col-md-4 col-sm-6">

            <a href="BD204305407Z/categorias.php?nomCat=camisetaH" class="tourTypeCard -type-1 d-block rounded-4 bg-white border-light rounded-4">
              <div class="tourTypeCard__content text-center pt-60 pb-24 px-30">
                <svg id="mySvg" width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#041b76">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path d="M3 7L6 4H9C9 4.39397 9.0776 4.78407 9.22836 5.14805C9.37913 5.51203 9.6001 5.84274 9.87868 6.12132C10.1573 6.3999 10.488 6.62087 10.8519 6.77164C11.2159 6.9224 11.606 7 12 7C12.394 7 12.7841 6.9224 13.1481 6.77164C13.512 6.62087 13.8427 6.3999 14.1213 6.12132C14.3999 5.84274 14.6209 5.51203 14.7716 5.14805C14.9224 4.78407 15 4.39397 15 4H18L21 7L20.5785 11.2152C20.542 11.5801 20.1382 11.7829 19.8237 11.5942L18 10.5V18C18 19.1046 17.1046 20 16 20H8C6.89543 20 6 19.1046 6 18V10.5L4.17629 11.5942C3.86184 11.7829 3.45801 11.5801 3.42152 11.2152L3 7Z" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </g>
                </svg>
                <h4 class="text-dark-1 text-18 fw-500 mt-50 md:mt-30">Camisetas</h4>
                <p class="text-light-1 lh-14 text-14 mt-5">Desde 15.99€</p>
              </div>
            </a>

          </div>

          <div class="col-xl col-md-4 col-sm-6">

            <a href="BD204305407Z/categorias.php?nomCat=tirantes" class="tourTypeCard -type-1 d-block rounded-4 bg-white border-light rounded-4">
              <div class="tourTypeCard__content text-center pt-60 pb-24 px-30">
                <svg id="mySvg" fill="#041b76" width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <g id="Shirt">
                      <g>
                        <path d="M16.657,21.949H7.343a2.5,2.5,0,0,1-2.5-2.5V11.222a6.468,6.468,0,0,1,.112-1.2L5.224,8.59a5.572,5.572,0,0,0,.094-1.015V3.3a1.252,1.252,0,0,1,1.25-1.25H8.815a1.251,1.251,0,0,1,1.25,1.25V6.413a1.935,1.935,0,0,0,3.87,0V3.3a1.251,1.251,0,0,1,1.25-1.25h2.247a1.252,1.252,0,0,1,1.25,1.25V7.575a5.486,5.486,0,0,0,.1,1.015l.269,1.431a6.57,6.57,0,0,1,.111,1.2v8.227A2.5,2.5,0,0,1,16.657,21.949ZM6.568,3.051a.251.251,0,0,0-.25.25V7.575a6.543,6.543,0,0,1-.111,1.2l-.27,1.432a5.5,5.5,0,0,0-.094,1.015v8.227a1.5,1.5,0,0,0,1.5,1.5h9.314a1.5,1.5,0,0,0,1.5-1.5V11.222a5.519,5.519,0,0,0-.094-1.016l-.269-1.43a6.453,6.453,0,0,1-.112-1.2V3.3a.251.251,0,0,0-.25-.25H15.185a.251.251,0,0,0-.25.25V6.413a2.935,2.935,0,0,1-5.87,0V3.3a.251.251,0,0,0-.25-.25Z"></path>
                        <path d="M11.986,17.333V13.874a.075.075,0,0,0-.114-.064l-.638.392a.149.149,0,0,1-.228-.128v-.65a.3.3,0,0,1,.145-.258l.764-.457a.3.3,0,0,1,.154-.043H12.7a.3.3,0,0,1,.3.3v4.367a.3.3,0,0,1-.3.3h-.409A.3.3,0,0,1,11.986,17.333Z"></path>
                      </g>
                    </g>
                  </g>
                </svg>
                <h4 class="text-dark-1 text-18 fw-500 mt-50 md:mt-30">Tirantes</h4>
                <p class="text-light-1 lh-14 text-14 mt-5">Desde 10€</p>
              </div>
            </a>

          </div>

          <div class="col-xl col-md-4 col-sm-6">

            <a href="BD204305407Z/categorias.php?nomCat=sudaderaH"" class=" tourTypeCard -type-1 d-block rounded-4 bg-white border-light rounded-4">
              <div class="tourTypeCard__content text-center pt-60 pb-24 px-30">
                <svg id="mySvg" fill="#041b76" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <g transform="translate(1 1)">
                      <g>
                        <g>
                          <path d="M436.162,289.133c-7.68-83.627-23.04-147.627-46.933-184.32c-1.707-1.707-11.947-13.653-15.36-17.92 c-0.854-0.854-1.796-1.474-2.777-1.897c-8.632-8.406-16.525-14.493-23.677-16.877c0.853-9.387-1.707-20.48-7.68-30.72 C326.935,13.507,298.775-1,254.402-1s-72.533,14.507-85.333,38.4c-5.973,10.24-8.533,21.333-8.533,30.72 c-6.827,2.56-14.507,8.533-24.747,18.773c-3.413,4.267-7.68,7.68-11.093,11.947c-1.707,2.56-3.413,4.267-4.267,5.12 c-23.893,37.547-39.253,101.547-46.933,185.173c-6.827,66.56-7.68,136.533-6.827,197.973c0,0.291,0,0.57,0,0.853 c0,3.87,0,7.06,0,10.24c0,1.251,0,2.498,0,3.413c0,0.333,0,0.625,0,0.853c0,4.267,4.267,8.533,8.533,8.533h34.133 c3.413,0,6.827-1.707,7.68-5.12l22.369-53.994c1.33,1.242,2.692,2.441,4.084,3.597v38.45c0,9.387,7.68,17.067,17.067,17.067 h187.733c9.387,0,17.067-7.68,17.067-17.067v-37.757c1.689-1.369,3.338-2.796,4.938-4.29l16.489,39.8l5.027,14.194 c1.707,3.413,4.267,5.12,7.68,5.12h0.853h33.28h0.853c4.267,0,8.533-3.413,8.533-8.533c0-0.853,0-1.707,0-4.267 c0-3.413,0-6.827,0-11.093C444.695,425.667,442.989,355.693,436.162,289.133z M419.095,291.693 c4.837,53.202,6.874,108.638,6.569,160.427h-38.968l-4.294-10.24c0.065-1.606,0.126-3.196,0.189-4.794 c0.389-0.962,0.665-1.924,0.665-2.886c3.413-104.96,2.56-191.147-0.853-261.12c-0.693-20.108-1.95-37.398-3.312-51.872 C398.659,155.371,411.429,215.026,419.095,291.693z M425.069,493.933h-19.627l-10.24-25.6h30.282 c-0.103,6.613-0.236,13.171-0.415,19.627C425.069,490.224,425.069,491.823,425.069,493.933z M90.562,290.84 c7.562-74.779,20.092-133.821,39.211-169.017c-1.385,15.054-2.668,32.42-3.371,52.11c-1.65,44.538-2.588,96.175-2.136,155.343 c0.157,34.873,0.837,72.135,2.136,111.751l-4.294,10.24H83.992C83.697,399.806,85.735,343.933,90.562,290.84z M104.215,493.933 H84.589c0-1.517,0-3.708,0-5.973c0-0.284,0-0.568,0-0.853c0-5.768,0-12.266,0-18.773h30.362L104.215,493.933z M348.269,493.933 H160.535v-27.212c3.198,1.63,6.489,3.073,9.863,4.322c0.074,0.028,0.147,0.056,0.222,0.084c0.769,0.282,1.543,0.553,2.32,0.815 c0.098,0.033,0.194,0.068,0.292,0.101c9.489,3.165,19.574,4.824,29.971,4.824h103.253c14.851,0,29.068-3.379,41.813-9.711 V493.933z M320.043,458.592c-0.323,0.057-0.645,0.118-0.969,0.171c-0.397,0.066-0.796,0.124-1.194,0.184 c-0.587,0.087-1.174,0.168-1.763,0.242c-0.266,0.033-0.531,0.069-0.797,0.1c-0.882,0.101-1.766,0.188-2.651,0.26 c-0.169,0.014-0.339,0.023-0.509,0.035c-0.754,0.055-1.509,0.1-2.264,0.133c-0.238,0.011-0.476,0.021-0.714,0.03 c-0.908,0.032-1.817,0.054-2.726,0.054H203.202c-0.911,0-1.822-0.022-2.733-0.054c-0.229-0.008-0.458-0.018-0.687-0.029 c-0.807-0.036-1.613-0.082-2.419-0.143c-0.106-0.008-0.213-0.014-0.319-0.022c-0.964-0.077-1.926-0.172-2.887-0.286 c-0.058-0.007-0.115-0.015-0.172-0.022c-0.965-0.116-1.928-0.249-2.889-0.402c-0.007-0.001-0.015-0.002-0.022-0.003 c-8.013-1.279-15.867-3.834-23.243-7.664c-0.038-0.02-0.075-0.04-0.112-0.06c-0.717-0.374-1.427-0.768-2.135-1.166 c-0.315-0.178-0.631-0.355-0.943-0.538c-0.231-0.134-0.459-0.277-0.69-0.414c-7.752-4.656-14.723-10.758-20.482-18.21 c-1.44-43.552-2.118-83.751-2.167-120.816c0.065-48.697,1.162-92.345,3.021-130.918c1.554-38.862,4.524-69.22,6.331-81.42 c5.819-5.786,10.809-9.947,13.876-11.662c2.178,3.847,5.174,8.198,8.807,12.868c10.24,12.8,23.04,20.48,38.4,20.48 c5.12,0,8.533-3.413,8.533-8.533s-3.413-8.533-8.533-8.533c-9.387,0-17.92-5.12-25.6-13.653c-2.56-3.413-5.12-6.827-6.827-10.24 c-1.091-2.182-1.485-3.661-1.85-4.671c-0.433-8.797,1.378-18.214,6.116-26.902c10.24-19.627,32.427-30.72,70.827-30.72 c38.4,0,60.587,11.093,70.827,29.867c5.12,9.387,6.827,19.627,5.973,28.16c-0.006,0.045-0.005,0.089-0.01,0.134 c-1.918,3.496-6.523,10.852-8.524,13.519c-7.68,8.533-16.213,13.653-25.6,13.653c-5.12,0-8.533,3.413-8.533,8.533 s3.413,8.533,8.533,8.533c15.36,0,28.16-7.68,38.4-20.48c3.71-4.24,6.76-8.809,8.949-12.889 c3.377,1.735,8.944,6.036,14.944,12.036c0,0.853,0.853,10.24,1.707,16.213c1.707,16.213,3.413,36.693,4.267,60.587 c3.413,68.267,4.267,153.6,0.853,256.853C354.567,445.827,338.014,455.384,320.043,458.592z"></path>
                          <path d="M241.602,101.4h25.6c5.12,0,10.24-2.56,13.653-5.973l20.48-26.453c8.533-11.093,0.853-27.307-13.653-27.307h-66.56 c-14.507,0-22.187,16.213-13.653,27.307l20.48,25.6C231.362,98.84,236.482,101.4,241.602,101.4z M287.682,58.733l-20.48,25.6 h-25.6l-20.48-25.6H287.682z"></path>
                          <path d="M228.802,203.8c5.12,0,8.533-3.413,8.533-8.533V127c0-5.12-3.413-8.533-8.533-8.533c-5.12,0-8.533,3.413-8.533,8.533 v68.267C220.269,200.387,223.682,203.8,228.802,203.8z"></path>
                          <path d="M271.469,127v68.267c0,5.12,3.413,8.533,8.533,8.533s8.533-3.413,8.533-8.533V127c0-5.12-3.413-8.533-8.533-8.533 S271.469,121.88,271.469,127z"></path>
                          <path d="M205.762,359.96l-42.667,42.667c-3.413,3.413-3.413,8.533,0,11.947s8.533,3.413,11.947,0l42.667-42.667 c3.413-3.413,3.413-8.533,0-11.947S209.175,356.547,205.762,359.96z"></path>
                          <path d="M303.042,359.96c-3.413-3.413-8.533-3.413-11.947,0s-3.413,8.533,0,11.947l42.667,42.667 c3.413,3.413,8.533,3.413,11.947,0s3.413-8.533,0-11.947L303.042,359.96z"></path>
                          <path d="M339.735,272.067c0-25.6-38.4-42.667-85.333-42.667s-85.333,17.067-85.333,42.667c0,25.6,38.4,42.667,85.333,42.667 S339.735,297.667,339.735,272.067z M254.402,297.667c-38.4,0-68.267-13.653-68.267-25.6c0-11.947,29.867-25.6,68.267-25.6 c38.4,0,68.267,13.653,68.267,25.6C322.669,284.013,292.802,297.667,254.402,297.667z"></path>
                          <path d="M271.469,263.533h-34.133c-5.12,0-8.533,3.413-8.533,8.533c0,5.12,3.413,8.533,8.533,8.533h34.133 c5.12,0,8.533-3.413,8.533-8.533C280.002,266.947,276.589,263.533,271.469,263.533z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
                <h4 class="text-dark-1 text-18 fw-500 mt-50 md:mt-30">Sudaderas</h4>
                <p class="text-light-1 lh-14 text-14 mt-5">Desde 35€</p>
              </div>
            </a>

          </div>

          <div class="col-xl col-md-4 col-sm-6">

            <a href="BD204305407Z/categorias.php?nomCat=crop_top" class="tourTypeCard -type-1 d-block rounded-4 bg-white border-light rounded-4">
              <div class="tourTypeCard__content text-center pt-60 pb-24 px-30">
                <svg id="mySvg" fill="#041b76" height="64px" width="64px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 407.272 407.272" xml:space="preserve">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path id="XMLID_49_" d="M277.407,230.753c3.265,3.748,2.874,9.433-0.875,12.698c-18.881,16.449-45.451,25.882-72.897,25.882 c-27.446,0-54.015-9.434-72.896-25.882c-3.748-3.265-4.139-8.951-0.874-12.698c3.266-3.747,8.949-4.139,12.698-0.874 c15.65,13.635,37.91,21.455,61.071,21.455c23.162,0,45.422-7.82,61.074-21.455C268.457,226.614,274.142,227.005,277.407,230.753z M407.129,332.998c-0.001,0.005-0.002,0.011-0.003,0.017c0,0.002-0.001,0.005-0.001,0.008c-0.007,0.04-0.015,0.079-0.022,0.118 l-9.501,48.65c-0.825,4.226-4.527,7.275-8.833,7.275H18.508c-4.305,0-8.008-3.049-8.833-7.274l-9.506-48.658 c0-0.002-0.001-0.005-0.001-0.008c-0.001-0.004-0.002-0.008-0.002-0.013c-0.001-0.006-0.002-0.011-0.003-0.017 c0-0.003-0.001-0.007-0.002-0.01c-0.001-0.008-0.003-0.016-0.004-0.023c0-0.001,0-0.002,0-0.003 c-0.241-1.29-0.194-2.566,0.097-3.765l31.856-145.784c0.903-4.133,4.563-7.079,8.792-7.079h4.343 c15.838,0,28.723-12.885,28.723-28.722V27.206c0-4.971,4.029-9,9-9h47.681c4.971,0,9,4.029,9,9v1.799 c19.96,2.798,41.912,4.268,63.989,4.268c22.078,0,44.028-1.469,63.988-4.268v-1.8c0-4.971,4.029-9,9-9h49.687c4.971,0,9,4.029,9,9 v120.505c0,15.836,12.884,28.721,28.721,28.721h2.343c4.23,0,7.89,2.946,8.792,7.079l31.854,145.782 C407.307,330.472,407.357,331.729,407.129,332.998z M139.647,65.984c18.983,0.301,31.107,1.528,39.174,10.314 c8.723,9.501,9.772,24.814,9.974,55.113v80.432c4.764,1.135,9.734,1.737,14.84,1.737c5.108,0,10.076-0.601,14.841-1.737V131.47 c0.202-30.358,1.251-45.672,9.974-55.172c8.067-8.786,20.189-10.013,39.173-10.314V47.179c-20.187,2.719-41.661,4.094-63.988,4.094 c-22.329,0-43.8-1.375-63.989-4.095V65.984z M241.71,88.471c-4.616,5.028-5.091,21.737-5.233,43.059v72.962 c18.645-11.195,31.146-31.614,31.146-54.9V83.985C254.021,84.201,245,84.887,241.71,88.471z M139.647,149.593 c0,23.286,12.503,43.706,31.148,54.9V131.47c-0.142-21.262-0.617-37.971-5.233-42.999c-3.291-3.584-12.312-4.27-25.915-4.486 V149.593z M20.181,322.408h366.911l-28.021-128.237c-23.44-2.484-41.761-22.372-41.761-46.459V36.206h-31.687v113.387 c0,45.208-36.78,81.987-81.988,81.987c-45.208,0-81.989-36.779-81.989-81.987V36.912c-0.002-0.1-0.002-0.201,0-0.302v-0.405H91.966 V147.71c0,24.781-19.393,45.119-43.8,46.632L20.181,322.408z M387.343,340.408H19.93l5.99,30.658h355.436L387.343,340.408z"></path>
                  </g>
                </svg>
                <h4 class="text-dark-1 text-18 fw-500 mt-50 md:mt-30">crop top</h4>
                <p class="text-light-1 lh-14 text-14 mt-5">Desde 20€</p>
              </div>
            </a>

          </div>

          <div class="col-xl col-md-4 col-sm-6">

            <a href="BD204305407Z/categorias.php?nomCat=leggins" class="tourTypeCard -type-1 d-block rounded-4 bg-white border-light rounded-4">
              <div class="tourTypeCard__content text-center pt-60 pb-24 px-30">
                <svg id="mySvg" fill="#041b76" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.997 511.997" xml:space="preserve" stroke="#041b76">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <g transform="translate(1 1)">
                      <g>
                        <g>
                          <path d="M374.465-1H135.532c-4.713,0-8.533,3.82-8.533,8.533v34.131v0.003v443.731c0,14.142,11.458,25.6,25.6,25.6h60.177 c13.876,0,25.23-11.059,25.589-24.927l7.646-290.59c0.131-4.866,4.118-8.749,8.989-8.749s8.857,3.883,8.989,8.755l7.646,290.588 c0.358,13.864,11.713,24.923,25.589,24.923h60.177c14.142,0,25.6-11.458,25.6-25.6V41.667v-0.003V7.533 C382.999,2.82,379.178-1,374.465-1z M365.932,16.067v17.064H254.999H144.065V16.067H365.932z M228.95,195.025l-7.646,290.6 c-0.119,4.619-3.904,8.305-8.528,8.305h-60.177c-4.716,0-8.533-3.817-8.533-8.533V50.2h102.4v120.895 C236.493,174.551,229.25,183.898,228.95,195.025z M357.399,493.931h-60.177c-4.624,0-8.408-3.686-8.528-8.302l-7.646-290.598 c-0.3-11.132-7.544-20.48-17.516-23.936V50.2h102.4v435.197C365.932,490.114,362.115,493.931,357.399,493.931z"></path>
                          <path d="M229.399,67.264h-68.267c-4.713,0-8.533,3.82-8.533,8.533v68.267c0,3.232,1.826,6.187,4.717,7.632l34.133,17.067 c2.402,1.201,5.23,1.201,7.632,0l34.133-17.067c2.891-1.445,4.717-4.4,4.717-7.632V75.797 C237.932,71.085,234.112,67.264,229.399,67.264z M220.865,138.79l-25.6,12.8l-25.6-12.8V84.331h51.2V138.79z"></path>
                          <path d="M348.865,67.264h-68.267c-4.713,0-8.533,3.82-8.533,8.533v68.267c0,3.232,1.826,6.187,4.717,7.632l34.133,17.067 c2.402,1.201,5.23,1.201,7.632,0l34.133-17.067c2.891-1.445,4.717-4.4,4.717-7.632V75.797 C357.399,71.085,353.578,67.264,348.865,67.264z M340.332,138.79l-25.6,12.8l-25.6-12.8V84.331h51.2V138.79z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
                <h4 class="text-dark-1 text-18 fw-500 mt-50 md:mt-30">Leggins</h4>
                <p class="text-light-1 lh-14 text-14 mt-5">Desde 35€</p>
              </div>
            </a>

          </div>

        </div>
      </div>
    </section>

    <section class="layout-pt-md layout-pb-lg">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row y-gap-20 justify-between items-end">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Accesorios Populares</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Descubre nuestro catálogo de accesorios</p>
            </div>
          </div>
        </div>

        <div data-anim-child="slide-up delay-2" class="pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar data-slider-cols="xl-4 lg-3 md-2 sm-2 base-1">
          <div class="swiper-wrapper">

            <div class="swiper-slide">

              <a href="BD204305407Z/categorias.php?nomCat=cascos" class="citiesCard -type-1 d-block rounded-4 ">
                <div class="citiesCard__image ratio ratio-3:4">
                  <img src="#" data-src="img/backgrounds/cascos.jpg" alt="image" class="js-lazy">
                </div>

                <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                  <div class="citiesCard__bg"></div>

                  <div class="citiesCard__top">
                  </div>

                  <div class="citiesCard__bottom">
                    <h4 class="text-26 md:text-20 lh-13 text-dark-1 mb-20">Cascos</h4>
                    <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Descubre</button>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="BD204305407Z/categorias.php?nomCat=gorras" class="citiesCard -type-1 d-block rounded-4 ">
                <div class="citiesCard__image ratio ratio-3:4">
                  <img src="#" data-src="img/backgrounds/gorras.jpg" alt="image" class="js-lazy">
                </div>

                <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                  <div class="citiesCard__bg"></div>

                  <div class="citiesCard__top">
                  </div>

                  <div class="citiesCard__bottom">
                    <h4 class="text-26 md:text-20 lh-13 text-dark-1 mb-20">Gorras</h4>
                    <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Descubre</button>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="BD204305407Z/categorias.php?nomCat=mochilas" class="citiesCard -type-1 d-block rounded-4 ">
                <div class="citiesCard__image ratio ratio-3:4">
                  <img src="#" data-src="img/backgrounds/mochilas.jpg" alt="image" class="js-lazy">
                </div>

                <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                  <div class="citiesCard__bg"></div>

                  <div class="citiesCard__top">
                  </div>

                  <div class="citiesCard__bottom">
                    <h4 class="text-26 md:text-20 lh-13 text-dark-1 mb-20">Mochilas</h4>
                    <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Descubre</button>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="BD204305407Z/categorias.php?nomCat=calcetines" class="citiesCard -type-1 d-block rounded-4 ">
                <div class="citiesCard__image ratio ratio-3:4">
                  <img src="#" data-src="img/backgrounds/calcetines.jpg" alt="image" class="js-lazy">
                </div>

                <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                  <div class="citiesCard__bg"></div>

                  <div class="citiesCard__top">
                  </div>

                  <div class="citiesCard__bottom">
                    <h4 class="text-26 md:text-20 lh-13 text-dark-1 mb-20">Calcetines</h4>
                    <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Descubre</button>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="BD204305407Z/categorias.php?nomCat=chanclas" class="citiesCard -type-1 d-block rounded-4 ">
                <div class="citiesCard__image ratio ratio-3:4">
                  <img src="#" data-src="img/backgrounds/chanclas.jpg" alt="image" class="js-lazy">
                </div>

                <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                  <div class="citiesCard__bg"></div>

                  <div class="citiesCard__top">
                  </div>

                  <div class="citiesCard__bottom">
                    <h4 class="text-26 md:text-20 lh-13 text-dark-1 mb-20">Chanclas</h4>
                    <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Descubre</button>
                  </div>
                </div>
              </a>

            </div>

          </div>

          <div class="slider-scrollbar bg-light-2 mt-40 sm:d-none js-scrollbar"></div>
        </div>
      </div>
    </section>

    <?php
    include('footer.php');
    ?>

  </main>


  <!-- JavaScript -->

  <script src="js/vendors.js"></script>
  <script src="js/main.js"></script>
</body>

</html>