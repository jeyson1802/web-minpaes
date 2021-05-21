<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="eBook - El poder escondido de la iglesia">
    <meta property="og:description" content="eBook - El poder escondido de la iglesia">
    <meta property="og:site_name" content="eBook - El poder escondido de la iglesia">
    <meta property="og:image" itemprop="image" content="https://minpaes.org/images/background-ebook.jpg">
    <meta property="og:image:secure_url" itemprop="image" content="https://minpaes.org/images/background-ebook.jpg">
    <meta property="og:url" content="https://minpaes.org/landing/ebook/elpoderescondidodelaiglesia/">
    <meta property="og:type" content="website">
    <meta property="og:updated_time" content="1450432930" />
    
    <!-- Main CSS -->
    <link href="../../dist/css/main.css" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Site Title -->
    <title>@yield('title')</title>

    <!-- Place Custom Favicon here -->
    <link rel="shortcut icon" href="../../images/favicon.png" type="image/png">

</head>

<body>

    <div class="page-loader">
      <div class="loader"><img src="../../images/logo-sm.svg" alt=""></div>
    </div>

    <!--
    ========================================================
                            CONTENT
    ========================================================
    -->
    <main>

      @yield('content')

    </main>
    <!-- =================== MAIN SECTION ENDS ============================= -->

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- loading in JQuery locally if CDN failed -->
    <script>window.jQuery || document.write('<script src="js/jquery.min.js">\x3C/script>')</script>
    <!-- Owl Carousel script -->
    <script src="../../js/plugins/owl.carousel.js"></script>
    <!-- JQuery Validator script -->
    <script src="../../js/plugins/jquery.validate.js"></script>
    <!-- JQuery Credit Card script -->
    <script src="../../js/plugins/jquery.card.js"></script>
    <!-- Animate On Scroll script -->
    <script src="../../js/plugins/aos.js"></script>
    <!-- Lightbox script -->
    <script src="../../js/plugins/lightbox.min.js"></script>
    <!-- Main (custom) script -->
    <script src="../../dist/js/main.min.js"></script>

    @include('layouts.pixelfacebookads')
    
    @stack('scripts')

</body>
</html>