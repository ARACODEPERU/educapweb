{{-- <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CPROD</title>

    <link href="{{ asset('themes/webpage/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('themes/webpage/plugins/revolution/css/settings.css') }}" rel="stylesheet" type="text/css">
    
    <link href="{{ asset('themes/webpage/plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css">
    
    <link href="{{ asset('themes/webpage/plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css">
    

    <link href="{{ asset('themes/webpage/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/webpage/css/aracode.css') }}" rel="stylesheet">


    <link href="{{ asset('themes/webpage/css/responsive.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('themes/webpage/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('themes/webpage/images/favicon.png') }}" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    @yield('heades')

</head>

<body>
    <div class="page-wrapper">


        @yield('content')





    </div>
    <div class="scroll-to-top scroll-to-target" data-target="html">
        <span class="fa fa-angle-up"></span>
    </div>

    
    <div id="whatsapp">
        <a target="_blank" href="https://wa.link/jibpow" class="wtsapp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>


    <style type="text/css">
        #whatsapp .wtsapp {
            position: fixed;
            transform: all .5s ease;
            background-color: #25D366;
            display: block;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            border-radius: 50px;
            border-right: none;
            color: #fff;
            font-weight: 700;
            font-size: 30px;
            bottom: 80px;
            right: 20px;
            border: 0;
            z-index: 9999;
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        #whatsapp .wtsapp:before {
            content: "";
            position: absolute;
            z-index: -1;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            display: block;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            -webkit-animation: pulse-border 1500ms ease-out infinite;
            animation: pulse-border 1500ms ease-out infinite;
        }

        #whatsapp .wtsapp:focus {
            border: none;
            outline: none;
        }

        @keyframes pulse-border {
            0% {
                transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
                opacity: 1;
            }

            100% {
                transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
                opacity: 0;
            }
        }
    </style>

    @yield('javaScripts')

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('themes/webpage/js/jquery.js') }}"></script>
    <script src="{{ asset('themes/webpage/js/popper.min.js') }}"></script>

    <script src="{{ asset('themes/educap/educap-carrito.js') }}"></script>

    <script src="{{ asset('themes/webpage/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('themes/webpage/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('themes/webpage/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}">
    </script>
    <script src="{{ asset('themes/webpage/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script src="{{ asset('themes/webpage/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}">
    </script>
    <script
        src="{{ asset('themes/webpage/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('themes/webpage/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}">
    </script>
    <script src="{{ asset('themes/webpage/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}">
    </script>
    <script src="{{ asset('themes/webpage/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}">
    </script>
    <script src="{{ asset('themes/webpage/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}">
    </script>
    <script src="{{ asset('themes/webpage/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}">
    </script>
    <script src="{{ asset('themes/webpage/js/main-slider-script.js') }}"></script>

    <script src="{{ asset('themes/webpage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('themes/webpage/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('themes/webpage/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('themes/webpage/js/wow.js') }}"></script>
    <script src="{{ asset('themes/webpage/js/bxslider.js') }}"></script>
    <script src="{{ asset('themes/webpage/js/appear.js') }}"></script>
    <script src="{{ asset('themes/webpage/js/mixitup.js') }}"></script>
    <script src="{{ asset('themes/webpage/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('themes/webpage/js/select2.min.js') }}"></script>
    <script src="{{ asset('themes/webpage/js/swiper.min.js') }}"></script>
    <script src="{{ asset('themes/webpage/js/owl.js') }}"></script>
    <script src="{{ asset('themes/webpage/js/script.js') }}"></script>

    
</body>

</html> --}}


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio en Mantenimiento</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #333;
        }
        .container {
            max-width: 600px;
            padding: 2rem 3rem;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transform: translateY(-20px);
            animation: floatUp 0.8s ease-out forwards;
        }
        @keyframes floatUp {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        .icon {
            width: 90px;
            height: 90px;
            margin: 0 auto 1.5rem;
            animation: spin 10s linear infinite;
        }
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        h1 {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #1a202c;
        }
        p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #4a5568;
            margin-bottom: 2rem;
        }
        .footer {
            margin-top: 2.5rem;
            font-size: 0.9rem;
            color: #718096;
        }
    </style>
</head>
<body>

    <div class="container" style="opacity: 0;">
        <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#4c51bf" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                <path d="M12 12l-2 2"></path>
                <path d="M16 8l-2 2"></path>
            </svg>
        </div>
        <h1>¡Estamos mejorando para ti!</h1>
        <p>
            Nuestro sitio web se encuentra actualmente en mantenimiento para ofrecerte una mejor experiencia.
            Volveremos a estar en línea muy pronto. ¡Gracias por tu paciencia!
        </p>

        <div class="footer">
            &copy; {{ date('Y') }} CPROD. Todos los derechos reservados.
        </div>
    </div>

</body>
</html>