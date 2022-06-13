<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="MINPAES">
    <meta property="og:description" content="Ministerio a las Naciones para Arrepentimiento y Santidad">
    <meta property="og:site_name" content="Ministerio a las Naciones para Arrepentimiento y Santidad">
    <meta property="og:image" itemprop="image" content="https://minpaes.org/images/logo.png">
    <meta property="og:image:secure_url" itemprop="image" content="https://minpaes.org/images/logo.png">
    <meta property="og:url" content="https://minpaes.org/">
    <meta property="og:type" content="website">
    <meta property="og:updated_time" content="1440432930" />

    <!-- Main CSS -->
    <link href="dist/css/main.css" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Site Title -->
    <title>@yield('title')</title>

    <!-- Place Custom Favicon here -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

</head>

<body>

    <div class="page-loader">
      <div class="loader"><img src="images/logo-sm.svg" alt=""></div>
    </div>

    <!-- =================== SITE HEADER BEGINS ============================= -->

    <header class="header transparent fixed light-text" data-onscroll-classes="dark-text white-bg"
      data-onscroll-logo="images/logo-dark.png">

      <div class="container">

        <nav class="header__nav bottom-nav">

          <div class="header__logo brand--logo">
            <a href="./"><img src="images/logo-light.png" alt="MINPAES - Ministerio a las Naciones para Arrepentimiento y Santidad"></a>
          </div>

          <div class="header__mobile--opener hide-on-lg">
            <button class="header__mobile--icon" aria-expanded="false" aria-controls="mobile-menu"
              data-toggle="mobile-menu">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </button>
          </div>

          <ul class="header__navitems show-on-lg" id="mobile-menu">

            <!-- Contains donation button for mobile and tablet devices -->
            <div class="header__extra">
              <div class="cta">
                <a href="{{ url('registrooracion') }}" class="button button-block-sm">Petici&oacute;n de Oraci&oacute;n</a>
              </div>
            </div><!-- .header__extra ends -->

            <li id="li-inicio" class="header__list active"><a href="./">Inicio</a></li>

            <li id="li-nosotros" class="header__list"><a href="{{ url('nosotros') }}">Nosotros</a></li>

            <li id="li-ensenanzas" class="header__list"><a href="{{ url('ensenanzas') }}">Ense&ntilde;anzas</a></li>

            <li id="li-galeria" class="header__list"><a href="{{ url('galeria') }}">Galeria</a></li>

            <li id="li-radio" class="header__list"><a href="{{ url('radio') }}">Radio</a></li>

            <li id="li-registrocontacto" class="header__list"><a href="{{ url('registrocontacto') }}">Contacto</a></li>

          </ul><!-- .header__navitems ends -->

          <!-- Contains Shopping cart and donation button -->
          <div class="header__extra desktop-version">
            <div class="cta hide-on-sm show-on-lg">
              <a href="{{ url('registrooracion') }}" class="button">Petici&oacute;n de Oraci&oacute;n</a>
            </div>
          </div><!-- .header__extra ends -->

        </nav><!-- .header__nav ends -->

      </div><!-- .container ends -->

    </header><!-- .header ends -->

    <!-- =================== SITE HEADER ENDS ============================= -->
    <!--
    ========================================================
                            CONTENT
    ========================================================
    -->
    <main>

      @yield('content')

      @include('layouts.horariomap')

    </main>
    <!-- =================== MAIN SECTION ENDS ============================= -->


    <!-- SCROLL BACK TO TOP BEGINS -->
    <div class="scroll-to-top"><i class="ri-arrow-up-line"></i></div>
    <!-- SCROLL BACK TO TOP ENDS -->


    <!-- =================== SITE FOOTER BEGINS ============================= -->

    <footer class="footer">

      <div class="container">

        <div class="footer__top display-flex justify-align-center">

          <div class="footer__logo">
            <div class="logo-wrapper">
              <img src="images/logo-sm.svg" alt="Small logo">
            </div>
          </div>

        </div><!-- .footer__top ends -->

        <div class="footer__bottom">

          <div class="row align-items-center">

            <div class="flex-md-6 flex-lg-4">

              <div class="footer__info copyright">&copy; 2022 - MINPAES - Todos los derechos reservados</div>

            </div><!-- .flex-* ends -->

            <div class="flex-md-6 flex-lg-4">

              <div class="footer__info credit">Web diseñada y desarrollada por MINPAES</div>

            </div><!-- .flex-* ends -->

            <div class="flex-md-6 flex-lg-4">
              @include('layouts.footersocial')
            </div><!-- .flex-* ends -->

          </div><!-- .row ends -->

        </div><!-- .footer__top ends -->

      </div><!-- .container ends -->

    </footer><!-- footer ends -->

    <!-- =================== SITE FOOTER ENDS ============================= -->

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- loading in JQuery locally if CDN failed -->
    <script>window.jQuery || document.write('<script src="js/jquery.min.js">\x3C/script>')</script>
    <!-- Owl Carousel script -->
    <script src="js/plugins/owl.carousel.js"></script>
    <!-- JQuery Validator script -->
    <script src="js/plugins/jquery.validate.js"></script>
    <!-- JQuery Credit Card script -->
    <script src="js/plugins/jquery.card.js"></script>
    <!-- Animate On Scroll script -->
    <script src="js/plugins/aos.js"></script>
    <!-- Lightbox script -->
    <script src="js/plugins/lightbox.min.js"></script>
    <!-- Main (custom) script -->
    <script src="dist/js/main.min.js"></script>

    @stack('scripts')

</body>
</html>
