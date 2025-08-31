<div>

    
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

    <footer class="main-footer"
        style="background: #000000;
                background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(5, 10, 39, 1) 35%, rgba(5, 10, 39, 1) 100%);">


        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row" style="margin-top: -50px;">
                    <div class="col-md-12">
                        <div class="logo" style="text-align: center;">
                            <a href="">
                                <img style="height: 150px;" src="{{ asset('themes/webpage/images/logoblanco.png') }}"
                                    alt="" title="">
                            </a>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <!--Footer Column-->
                    <div class="footer-column col-md-4">
                        <div class="footer-widget about-widget">
                            <h4 class="widget-title">Sobre Nosotros</h4>
                            <p>
                                CPROD capacita y certifica a entrenadores y profesionales del fútbol formativo con
                                programas, talleres y diplomados online de alcance internacional.
                            </p>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-md-2">
                        <div class="footer-widget">
                            <h4 class="widget-title">Navegar</h4>
                            <ul class="user-links">
                                <li><a href="{{ route('index_main') }}">Home</a></li>
                                <li><a href="{{ route('web_about') }}">Nosotros</a></li>
                                <li><a href="{{ route('web_courses') }}">Cursos</a></li>
                                <li><a href="{{ route('web_contact_us') }}">Contacto</a></li>
                            </ul>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-md-3">
                        <div class="footer-widget">
                            <h4 class="widget-title">Politicas</h4>
                            <ul class="user-links">
                                <li><a href="#">Calidad</a></li>
                                <li><a href="{{ route('web_privacy_policies') }}">Privacidad</a></li>
                                <li><a href="#">Libro de reclamaciones</a></li>
                            </ul>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-md-3">
                        <div class="footer-widget contact-widget">
                            <h4 class="widget-title">Contacto</h4>
                            <div class="widget-content">
                                <ul class="contact-info">
                                    <li>
                                        <i class="fa fa-phone-square"></i>
                                        <a href="tel:+51907728496">(+51) 907 728 496</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <a href="">
                                            admi.cprod@gmail.com
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker-alt"></i> Domus Hogares Sector 6 mz A lote 1
                                    </li>
                                </ul>
                                <ul class="social-icon-two">
                                    <li><a target="_blank" href="https://www.facebook.com/cprod.oficial"><i
                                                class="fab fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="https://www.instagram.com/cprod.oficial/"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li><a target="_blamk" href="https://www.youtube.com/@CPROD-capacitaci%C3%B3n"><i
                                                class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="copyright-text">&copy; Copyright reservados a CPROD | Desarrollado por <a
                            href="https://www.aracodeperu.com/">Aracode Smart Solutions</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
