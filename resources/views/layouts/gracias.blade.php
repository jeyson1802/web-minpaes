<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Gracias por registrarte">
    <meta property="og:description" content="Gracias por registrarte">
    <meta property="og:site_name" content="Gracias por registrarte">
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

    <style type="text/css">
        .button-telegram {
            font-size: 1.8rem;
            padding: 1.6rem 2rem;
            text-align: center;
            border: 0;
            cursor: pointer;
            color: #000;
            background-color: #f7c718;
            border: 0.1rem solid rgba(0, 0, 0, 0);
            transition: all .3s ease-out;
            font-weight: bold;
        }

        .our-belief__box .heading.thanks::before {
            content: "";
            position: absolute;
            width: 50%;
            height: 0.4rem;
            background-color: #f7c718;
            bottom: -0.8rem;
            left: 50%;
            transform: translateX(-50%);
        }

        .message {
            height: 80rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @media screen and (min-width: 34.5625em) {
            .message {
                height: 65vh;
            }
        }

        @media screen and (min-width: 87.5625em) {
            .message {
                height: 70rem;
            }
        }

    </style>

</head>

<body>

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
    <script>
        window.jQuery || document.write('<script src="js/jquery.min.js">\x3C/script>')
    </script>
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

    @stack('scripts')

</body>

</html>
