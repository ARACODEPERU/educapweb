
<header class="main-header header-style-one" id="home">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Main box -->
    <div class="main-box">
        <div class="logo-box">
            <div class="logo">
                <a href="" title="">
                    <img src="{{ asset('themes/webpage/images/EDUCAP-LogoFondo.jpg') }}" alt="" title="">
                </a>
            </div>
        </div>
        <!--Nav Box-->
        <div class="nav-outer">
            <nav class="nav main-menu">
                <ul class="navigation">
                    <li><a href="{{ route('index_main') }}">Home</a></li>
                    <li><a href="{{ route('web_about') }}">Nosotros</a></li>
                    <li><a href="{{ route('web_courses') }}">Cursos</a></li>
                    <li><a href="{{ route('web_contact_us') }}">Contacto</a></li>
                </ul>
            </nav>
            <!-- Main Menu End-->


            <div class="outer-box">
                <a href="tel:+92(8800)9806" class="info-btn">
                    <i class="icon fa fa-phone"></i>
                    <small>Llamanos al:</small><br> +51 977627207
                </a>

                
                <div class="ui-btn-outer">
                    <button class="ui-btn ui-btn search-btn">
                        <span class="icon lnr lnr-icon-search"></span>
                    </button>
                </div>
                <a href="{{ route('web_carrito') }}" class="ui-btn cart-icon">
                    <i class="lnr-icon-shopping-cart"></i>
                    <span class="cart-count contador" id="contadorCarritoWeb">0</span>
                    <span id="contadorCarritoMovil" hidden style="color: white; display: none;"></span>
                    <div class="modal">
                        <h5>Tu Carrito</h5>
                        <div id="cartItems">
                            <div class="product">
                                <span style="font-size: 15px;">Producto 1 - $10</span>
                                <button class="remove-btn">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                            <div class="product">
                                <span style="font-size: 15px;">Producto 2 - $15</span>
                                <button class="remove-btn">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </div>
                        <p>
                            <strong>Total:</strong> S/ <span id="totalPrice"> 25</span>
                        </p>
                        
                    </div>
                </a>

                <style>
                    .cart-icon {
                        cursor: pointer;
                        font-size: 24px;
                        position: relative;
                    }
                    .modal {
                        display: none; /* Oculto por defecto */
                        position: absolute;
                        top: 55px;
                        left: -60px;
                        height: auto;
                        background: white;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                        padding: 20px;
                        width: 280px;
                    }
                    .cart-icon:hover .modal {
                        display: block; /* Mostrar el modal al pasar el mouse */
                    }
                    .product {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        padding: 10px 0;
                        border-bottom: 1px solid #ccc;
                    }
                    .remove-btn {
                        background: #dc3545;
                        color: white;
                        border: none;
                        padding: 3px 10px;
                        cursor: pointer;
                        border-radius: 5px;
                        font-size: 12px;
                    }
                    .remove-btn:hover {
                        background: #c82333;
                    }
                    .products {
                        margin-top: 20px;
                    }
                    .product-list {
                        display: flex;
                        flex-direction: column;
                    }
                    .product-item {
                        display: flex;
                        justify-content: space-between;
                        padding: 10px;
                        background: white;
                        border-radius: 5px;
                        margin-bottom: 10px;
                        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
                    }
                    @media (max-width: 600px) {
                        .header {
                            flex-direction: column;
                            align-items: flex-start;
                        }
                        .cart-icon {
                            margin-top: 10px;
                        }
                        .modal {
                            width: 100%; /* Aumentar el ancho del modal en pantallas pequeñas */
                        }
                    }
                </style>

                <a href="{{ route('login') }}" class="theme-btn btn-style-one"><span class="btn-title">Campus Virtual</span></a>

                <!-- Mobile Nav toggler -->
                <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
            </div>
        </div>
    </div>
    <!-- End Main Box -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo">
                    <a href="">
                        <img src="{{ asset('themes/webpage/images/EDUCAP-LogoFondo.jpg') }}" alt="" title="">
                    </a>
                </div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>

            <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </ul>
            <ul class="contact-list-one">
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <i class="icon lnr-icon-phone-handset"></i>
                        <span class="title">Llamanos</span>
                        <a href="tel:+92880098670">+51 977627207</a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-envelope1"></span>
                        <span class="title">E-mail</span>
                        <a href="">
                            correo@dominio.com
                        </a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-clock"></span>
                        <span class="title">Horarios</span>
                        Mon - Sat 8:00 - 6:30, Sunday - CLOSED
                    </div>
                </li>
            </ul>

            <ul class="social-links">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </nav>
    </div><!-- End Mobile Menu -->

    <!-- Header Search -->
    <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>

        <div class="search-inner">
            <form method="post" action="index.php">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search..." required="">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Header Search -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">
                <!--Logo-->
                <div class="logo">
                    <a href="" title="">
                        <img src="{{ asset('themes/webpage/images/EDUCAP-LogoFondo.jpg') }}" alt="" title="">
                    </a>
                </div>

                <!--Right Col-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->


                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>

            </div>
        </div>
        <style>
            .cart-icon {
    position: relative;
    display: inline-block;
}

.cart-count {
    position: absolute;
    top: -8px;
    right: -8px;
    background-color: #5bc0de; /* Color celeste */
    color: #000; /* Color negro */
    border-radius: 50%; /* Para hacer un círculo */
    width: 20px;
    height: 20px;
    line-height: 20px;
    text-align: center;
    font-size: 12px;
}
        </style>
    </div>
    <!-- End Sticky Menu -->
</header>
