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
  <title>AmazFit</title>
</head>

<body>

  <main>


    <!-- TODO: METER EL HEADER -->
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
    <header data-add-bg="" class="header bg-white js-header shadow-4" data-x="header" data-x-toggle="is-menu-opened">
      <div data-anim="fade" class="header__container container">
        <div class="row justify-between items-center">

          <div class="col-auto">
            <div class="d-flex items-center">
              <a href="../index.php" class="header-logo mr-20" data-x="header-logo" data-x-toggle="is-logo-dark">
                <img src="../img/general/logo-dark.svg" alt="logo icon">
                <img src="../img/general/logo-dark.svg" alt="logo icon">
              </a>
            </div>
          </div>

          <div class="col-auto">
            <div class="d-flex items-center">

              <div class="header-menu " data-x="mobile-menu" data-x-toggle="is-menu-active">
                <div class="mobile-overlay"></div>
                <?php
                include('../BD204305407Z/header_menu.php');
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="layout-pt-lg layout-pb-lg bg-blue-2">
      <div class="container">
        <div class="row justify-center">
          <div class="col-xl-6 col-lg-7 col-md-9">
            <div class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-3">
              <div class="row y-gap-20">
                <div class="col-12">
                  <h1 class="text-22 fw-500">Crea una cuenta como proveedor</h1>
                  <p class="mt-10">Ya tienes una cuenta? <a href="login.php" class="text-blue-1">Inicia Sesión</a></p>
                </div>

                <div class="col-12">
                  <div class="form-input ">
                    <input type="text" required name="cif_pro" id="cif_pro">
                    <label class="lh-1 text-14 text-light-1">CIF <span style="color: red;">*</span></label>
                  </div>
                </div>
                <div class="col-12">

                  <div class="form-input ">
                    <input type="text" required name="name_pro" id="name_pro">
                    <label class="lh-1 text-14 text-light-1">Nombre <span style="color: red;">*</span></label>
                  </div>

                </div>

                <div class="col-12">

                  <div class="form-input ">
                    <input type="text" required name="last_name_pro" id="last_name_pro">
                    <label class="lh-1 text-14 text-light-1">Apellido</label>
                  </div>

                </div>

                <div class="col-12">

                  <div class="form-input ">
                    <input type="text" required name="email_pro" id="email_pro">
                    <label class="lh-1 text-14 text-light-1">Dirección de correo electrónico <span style="color: red;">*</span></label>
                  </div>

                </div>

                <div class="col-12">

                  <div class="form-input ">
                    <input type="password" required name="passw_pro" id="passw_pro">
                    <label class="lh-1 text-14 text-light-1">Contraseña <span style="color: red;">*</span></label>
                  </div>

                </div>

                <div class="col-12">

                  <div class="form-input ">
                    <input type="text" required name="dir_pro" id="dir_pro">
                    <label class="lh-1 text-14 text-light-1">Dirección <span style="color: red;">*</span></label>
                  </div>

                </div>
                <div class="col-12">

                  <div class="form-input ">
                    <input type="number" required name="tel_pro" id="tel_pro">
                    <label class="lh-1 text-14 text-light-1">Teléfono <span style="color: red;">*</span></label>
                  </div>

                </div>
                <div class="col-12">

                  <div onclick="registerUser()" class="button py-20 -dark-1 bg-blue-1 text-white rounded-4">
                    Regístrar <div class="icon-arrow-top-right ml-15"></div>
                  </div>

                </div>
                <div class="col-12">
                  <p class="text-center px-10">Al crear una cuenta, acepta nuestros Términos de servicio y Declaración
                    de privacidad.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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

  </main>

  <!-- JavaScript -->

  <script src="../js/vendors.js"></script>
  <script src="../js/main.js"></script>
  <script src="../alertifyjs/alertify.js"></script>
  <script src="../js/jquery-3.6.1.min.js"></script>
</body>

</html>
<script>
  function esCorreoElectronicoValido(correo) {
    const expresionRegularCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    return expresionRegularCorreo.test(correo);
  }

  function registerUser() {
    var cif = $('#cif_pro').val();
    var name = $('#name_pro').val();
    var last = $('#last_name_pro').val();
    var email = $('#email_pro').val();
    var password = $('#passw_pro').val()
    var direccion = $('#dir_pro').val();
    var telefono = $('#tel_pro').val();

    if (!name) {
      alertify.error("Rellene el campo de nombre", 3);
      return;
    }
    if (!email) {
      alertify.error("Rellene el campo de Dirección de correo electrónico", 3);
      return;
    }
    if (esCorreoElectronicoValido(email) === false) {
      alertify.error("La dirección de correo electrónico no es válida", 3);
      return;
    }
    if (!password) {
      alertify.error("Rellene el campo de contraseña", 3);
      return;
    }
    if (!direccion) {
      alertify.error("Rellene el campo de dirección", 3);
      return;
    }
    if (!telefono) {
      alertify.error("Rellene el campo de teléfono", 3);
      return;
    }
    // Asignar null si apellido no tiene valor
    last = last || null;
    $.post('userRegisterPro.php', {
        cif: cif,
        user: name,
        last: last,
        email: email,
        password: password,
        direccion: direccion,
        telefono: telefono
      },
      function(data) {
        console.log(data);
        const value = parseInt(JSON.parse(data)["0"]);
        console.log(value);
        if (value === 0) {
          alertify.error("El email de proveedor seleccionado ya existe", 3);
          $('#user_name').addClass("border-2 border-red-500");
        } else {
          alertify.success('Se ha registrado correctamente el proveedor');
        }
      }
    );
  }
</script>