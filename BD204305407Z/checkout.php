<?php
include('../conexion.php');
session_start();
$num_cart = 0;

if (isset($_SESSION['carrito']['producto'])) {
    $num_cart = count($_SESSION['carrito']['producto']);
}

$producto = isset($_SESSION['carrito']['producto']) ? $_SESSION['carrito']['producto'] : null;
// $caracteristica = isset($_SESSION['carrito']['caracteristica']) ? $_SESSION['carrito']['caracteristica'] : null;

$lista_carrito = array();
if ($producto  != null) {
    foreach ($producto as $clave => $cantidad) {
        $producto_query = "SELECT *, $cantidad AS cantidad FROM Caracteristica JOIN Producto ON Caracteristica.idCaracteristica = '$clave' AND Producto.idProducto = Caracteristica.idProducto";
        $result = consultar("localhost", "root", "", $producto_query);
        $lista_carrito[] = mysqli_fetch_array($result);
    }
}

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

        input[type="number"] {
            text-align: center;
        }
    </style>
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

                                    <span class="responsiveFlyoutBasket_itemsCount" data-js-element="itemsCount">
                                        <?= $num_cart ?>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="row y-gap-30 ">
            <div class="py-30 px-30 rounded-4 bg-white shadow-3">
                <div class="d-flex justify-between items-center mb-3">
                    <h2 class="text-22 lh-1 fw-500">
                        Tu carrito
                    </h2>
                </div>
                <div class="tabs -underline-2 js-tabs">

                    <div class="tabs__content pt-30 js-tabs-content">

                        <div class="tabs__pane -tab-item-1 is-tab-el-active">
                            <div class="overflow-scroll scroll-bar-1">
                                <table class="table-3 -border-bottom col-12">
                                    <thead class="bg-light-2">
                                        <tr>
                                            <th>Productos</th>
                                            <th class="text-center">Precio</th>
                                            <th class="text-center">Cantidad</th>
                                            <th class="text-center">Subtotal</th>
                                            <th class="text-center">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($lista_carrito == null) {
                                            echo '<tr><td colspan = "5" class="text-center"><b>Lista vacía</b></td></tr>';
                                        } else {
                                            $total = 0;
                                            foreach ($lista_carrito as $prod) {
                                                $_id = $prod['idCaracteristica'];
                                                $nombre = $prod['nombre'];
                                                $precio = $prod['precio'];
                                                $stock = $prod['stock'];
                                                $talla = $prod['talla'];
                                                $color = $prod['color'];
                                                $cantidad = $prod['cantidad'];
                                                $categoria = $prod['nombreCat'];
                                                $descuento = $prod['descuento'];
                                                $precio_des = $precio - (($precio * $descuento) / 100);
                                                $subtotal = $cantidad * $precio_des;
                                                $total += $subtotal;  ?>
                                                <tr>
                                                    <?php if ($categoria == 'creatina' or $categoria == 'proteina' or $categoria == 'pre_workout' or $categoria == 'energia') {
                                                    ?>
                                                        <td><?= $nombre ?> <?= $talla ?> g, sabor: <?= $color ?></td>
                                                    <?php
                                                    } else { ?>
                                                        <td><?= $nombre ?> <?= $talla ?>, color: <?= $color ?></td>
                                                    <?php } ?>
                                                    <td class="text-center"><?php echo number_format($precio_des, 2, '.', ',') . "€"; ?></td>
                                                    <td class="text-center align-middle">
                                                        <input type="number" name="cantidad" id="cantidad_<?= $_id ?>" min="1" max="<?= $stock ?>" size="5" value="<?= $cantidad ?>" onchange="actualizaCantidad(this.value, '<?= $_id ?>')">
                                                    </td>
                                                    <td class="text-center">
                                                        <div id="subtotal_<?= $_id ?>" name="subtotal[]">
                                                            <?php echo number_format($subtotal, 2, '.', ',') . "€"; ?>
                                                        </div>
                                                    </td>
                                                    <td class="justify-center">
                                                        <div onclick="deleteItem('<?= $_id ?>')" class="button px-5 fw-400 rounded-full text-14 border-white  h-50 text-white">
                                                            <svg width="64px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path d="M20.5001 6H3.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                                                    <path d="M9.5 11L10 16" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                                                    <path d="M14.5 11L14 16" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                                                    <path d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6" stroke="#1C274C" stroke-width="1.5"></path>
                                                                    <path d="M18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5M18.8334 8.5L18.6334 11.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php   } ?>
                                            <tr>
                                                <td colspan="3">
                                                </td>
                                                <td class="text-18 text-dark-1 fw-500 text-center" id="total"> <b>Total: </b> <?php echo number_format($total, 2, '.', ',') . "€";  ?></td>
                                            </tr>
                                        <?php   } ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php
                            // Verifica si la sesión 'user' está establecida y tiene un valor
                            if (isset($_SESSION['user']) && !empty($_SESSION['user'])) { ?>
                                <?php if ($lista_carrito != null) { ?>
                                    <div class="col-12 mt-10">
                                        <div onclick="location.href='pago.php'" class="button py-15 offset-md-7 -dark-1 bg-blue-1 text-white rounded-xl">
                                            Realizar pago <div class="icon-arrow-top-right ml-15"></div>
                                        </div>

                                    </div>
                                <?php }
                            } else {
                                ?>
                                <div class="col-12 mt-10">
                                    <div onclick="location.href='login.php'" class="button offset-md-7 border-dark-1 px-30 fw-400 text-14 -blue-1 bg-white h-50 text-dark-1">
                                    Inicia Sesión
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-30">
            </div>
        </div>
        </div>

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
    function actualizaCantidad(valor, idProducto) {
        $.post('carritoUpdate.php', {
                id: idProducto,
                cantidad: valor,
                action: 'agregar'
            },
            function(data) {
                const d = JSON.parse(data);
                if (d.ok) {
                    let subtotal = document.getElementById("subtotal_" + idProducto);
                    subtotal.innerHTML = d.sub;

                    let total = 0.00;
                    let list = document.getElementsByName("subtotal[]");

                    for (let index = 0; index < list.length; index++) {
                        total += parseFloat(list[index].innerHTML.replace(/[,€]/g, ''))
                    }

                    total = new Intl.NumberFormat('es-Es', {
                        minimumFractionDigits: 2
                    }).format(total)

                    document.getElementById("total").innerHTML = total + '€'
                }
            }
        );
    }

    function eliminarProducto(idProducto) {
        console.log(idProducto);
        $.post('carritoUpdate.php', {
                id: idProducto,
                action: 'eliminar'
            },
            function(data) {
                const d = JSON.parse(data);
                // console.log(data);
                if (d.ok) {
                    location.reload();
                }
            }
        );
    }

    function deleteItem(idProducto) {
        alertify.confirm("¿Desea eliminar el producto del carrito?",
            function() {
                alertify.success('Eliminar');
                eliminarProducto(idProducto);
            },
            function() {
                alertify.error('Cancelar');
            }).set('labels', {
            ok: 'Eliminar',
            cancel: 'Cancelar'
        });
    }
</script>