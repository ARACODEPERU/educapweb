@extends('layouts.webpage')

@section('content')

    <!-- Main Header-->
    <x-header />
    <!--End Main Header -->

    <!--Main Slider-->
     <x-slider/>
    <!-- End Main Slider-->

    <!-- About Section -->
    <x-about-company />
    <!--Emd About Section -->

    <!-- Courses Section -->
    {{-- <x-courses-new /> --}}
    
    <section class="courses-section" id="courses">
        <div class="auto-container">

            <div class="sec-title">
                <span class="sub-title">Nuevos Cursos</span>
                <h2>Elige un curso para comenzar tu estudio</h2>
            </div>

            <div class="row">
                @foreach ( $courses as $course)
                    <div class="course-block-two col-md-6">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ route('web_course_description', $course->id) }}">
                                        <img src="{{ asset('storage/'.$course->course->image) }}" alt="">
                                    </a>
                                </figure>
                                <span class="price">S/ {{ $course->price }}</span>
                                <div class="value">{{ $course->category_description }}</div>
                            </div>
                            <div class="content-box">
                                <h5 class="title">
                                    <a href="{{ route('web_course_description', $course->id) }}">
                                        {{ $course->name }}
                                    </a>
                                </h5>
                                <a href="{{route('web_course_description', ['id' => $course->id])}}" class="theme-btn btn-style-one small" style="margin-bottom: 10px; width: 100%;">
                                    Más Información
                                </a>
                                <a class="theme-btn btn-style-cart small"
                                            onclick="agregarAlCarrito({ id: {{ $course->id }}, nombre: '{{ $course->name }}', precio: {{ $course->price }} })"
                                            style="width: 100%;">
                                    <i class="lnr-icon-shopping-cart" style="font-size: 18px;"></i>
                                    &nbsp;Agregar al carrito
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="bottom-text">
                <a href="" class="theme-btn btn-style-one small">Ver todos cursos</a>
            </div>
        </div>
    </section>



    <!-- End Courses Section-->

    <!-- Features Section -->
    <x-features />
    <!-- End Features Section-->

    <!-- Categories Section -->
    {{-- <section class="categories-section-current">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon icon-group-1 bounce-y"></span>
                <span class="icon icon-group-2 bounce-y"></span>
            </div>

            <div class="sec-title text-center">
                <span class="sub-title">Consulta nuestras categorías</span>
                <h2>
                    Principales categorías de cursos <br>
                    populares para mostrar
                </h2>
            </div>

            <div class="row justify-content-center">
                <div class="category-block-current col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-student-2"></i>
                        </div>
                        <h6 class="title">
                            <a href="">
                                Gestión <br> Empresarial
                            </a>
                        </h6>
                    </div>
                </div>

                <div class="category-block-current col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-stationary"></i>
                        </div>
                        <h6 class="title">
                            <a href="">
                                Artes y <br>Diseño
                            </a>
                        </h6>
                    </div>
                </div>

                <div class="category-block-current col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-online-learning"></i>
                        </div>
                        <h6 class="title">
                            <a href="">
                                Ciencias de <br>la Computación
                            </a>
                        </h6>
                    </div>
                </div>

                <div class="category-block-current col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-study"></i>
                        </div>
                        <h6 class="title">
                            <a href="">
                                Desarrollo <br> Personal
                            </a>
                        </h6>
                    </div>
                </div>

                <div class="category-block-current col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-pie-chart"></i>
                        </div>
                        <h6 class="title">
                            <a href="">
                                Negocios y <br> Finanzas
                            </a>
                        </h6>
                    </div>
                </div>

                <div class="category-block-current col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-web-2"></i>
                        </div>
                        <h6 class="title">
                            <a href="">
                                Vídeo y <br> Fotografía
                            </a>
                        </h6>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!-- End Product Categories -->

    <!-- Signup Section -->
    {{-- <section class="signup-section" id="contact">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon icon-paper-clip bounce-x"></span>
            </div>
            <div class="outer-box" style="background-image: url({{ asset('themes/webpage/images/background/3.jpg') }})">
                <span class="float-icon icon-pencil-line wow fadeInUp"></span>
                <div class="row">
                    <!-- Title Column -->
                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="sec-title light">
                            <h2>Ponte en contacto con nosotros</h2>
                            <div class="text">
                                Texto corto que invite a comunicarse con la institución
                            </div>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sign Form -->
                            <div class="signup-form wow fadeInLeft">
                                <!--Contact Form-->
                                <form method="post" action="get" id="contact-form">
                                    <div class="form-group">
                                        <input type="text" name="full_name" placeholder="Nombre completo" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" placeholder="Teléfono" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="Email" placeholder="Email address" required>
                                    </div>

                                    <div class="form-group">
                                        <textarea name="form_message" class="form-control required" rows="9" placeholder="Mensaje"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Enviar
                                            Mensaje</button>
                                    </div>
                                </form>
                            </div>
                            <!--End Contact Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--End FAQ Section -->

    <!-- Team Section -->
    <x-team />
    <!-- End Team Section -->

    <!-- Call To Action Two -->
    <x-certificate />
    <!--End Call To Action Two -->

    <!-- Testimonial Section Three -->
    {{-- <section class="testimonial-section">
        <div class="anim-icons">
            <span class="icon icon-dotted-map-2"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                <div class="title-column col-xl-4 col-lg-5 col-md-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">Nuestros testimonios</span>
                            <h2>
                                Lo que
                                dicen <br>
                                de nuestros cursos
                            </h2>
                            <div class="text">Aqui un pequeño texto descriptivo.</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-column col-xl-8 col-lg-7 col-md-12">
                    <div class="carousel-outer">
                        <div class="testimonial-carousel owl-carousel owl-theme">
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <figure class="thumb">
                                            <img src="{{ asset('themes/webpage/images/resource/testi-thumb-1.jpg') }}"
                                                alt="">
                                        </figure>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="text">
                                            Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit,
                                            sed do incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <div class="info-box">
                                            <span class="icon-quote"></span>
                                            <h4 class="name">Jame sickres</h4>
                                            <span class="designation">Market Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <figure class="thumb">
                                            <img src="{{ asset('themes/webpage/images/resource/testi-thumb-2.jpg') }}"
                                                alt="">
                                        </figure>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="text">
                                            Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit,
                                            sed do incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <div class="info-box">
                                            <span class="icon-quote"></span>
                                            <h4 class="name">Aleesha brown</h4>
                                            <span class="designation">Market Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <figure class="thumb">
                                            <img src="{{ asset('themes/webpage/images/resource/testi-thumb-1.jpg') }}"
                                                alt="">
                                        </figure>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="text">
                                            Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit,
                                            sed do incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <div class="info-box">
                                            <span class="icon-quote"></span>
                                            <h4 class="name">Jame sickres</h4>
                                            <span class="designation">Market Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <figure class="thumb">
                                            <img src="{{ asset('themes/webpage/images/resource/testi-thumb-2.jpg') }}"
                                                alt="">
                                        </figure>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="text">Lorem ipsum is simply free text dolor sit amet, consectetur
                                            adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.</div>
                                        <div class="info-box">
                                            <span class="icon-quote"></span>
                                            <h4 class="name">Aleesha brown</h4>
                                            <span class="designation">Market Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <figure class="thumb">
                                            <img src="{{ asset('themes/webpage/images/resource/testi-thumb-1.jpg') }}"
                                                alt="">
                                        </figure>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="text">Lorem ipsum is simply free text dolor sit amet, consectetur
                                            adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.</div>
                                        <div class="info-box">
                                            <span class="icon-quote"></span>
                                            <h4 class="name">Jame sickres</h4>
                                            <span class="designation">Market Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <figure class="thumb">
                                            <img src="{{ asset('themes/webpage/images/resource/testi-thumb-2.jpg') }}"
                                                alt="">
                                        </figure>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="text">
                                            Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit,
                                            sed do incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <div class="info-box">
                                            <span class="icon-quote"></span>
                                            <h4 class="name">Aleesha brown</h4>
                                            <span class="designation">Market Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Testimonial Section Three -->

    <!-- About Section Two-->
    <x-platform />
    <!--Emd About Section Two-->

    <!-- Countdown Section -->
    {{-- <section class="countdown-section">
        <div class="bg-image zoom-two" style="background-image: url({{ asset('themes/webpage/images/background/2.jpg') }})"></div>
        <div class="auto-container">
            <div class="content-box">
                <div class="sec-title light text-center">
                    <span class="sub-title">Book your seat now</span>
                    <h2>Upcoming study trip</h2>
                </div>
                <div class="time-counter wow fadeInUp">
                    <div class="time-countdown" data-countdown="2/2/2026"></div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Deal Section -->

    <!-- News Section -->
    {{-- <section class="news-section" id="news">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">directly from blog</span>
                <h2>Our latest news &<br> upcoming blog posts</h2>
            </div>

            <div class="row">
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="">
                                    <img src="{{ asset('themes/webpage/images/resource/news-1.jpg') }}" alt="">
                                </a>
                            </figure>
                            <span class="date"><b>20</b> SEP</span>
                        </div>
                        <div class="content-box">
                            <div class="content">
                                <ul class="post-info">
                                    <li><i class="fa fa-user"></i> by Admin</li>
                                    <li><i class="fa fa-comments"></i> 2 Comments</li>
                                </ul>
                                <h4 class="title"><a href="">The quality role of the elementary teacher in education</a></h4>
                                <a href="" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="">
                                    <img src="{{ asset('themes/webpage/images/resource/news-2.jpg') }}" alt="">
                                </a>
                            </figure>
                            <span class="date"><b>20</b> SEP</span>
                        </div>
                        <div class="content-box">
                            <div class="content">
                                <ul class="post-info">
                                    <li><i class="fa fa-user"></i> by Admin</li>
                                    <li><i class="fa fa-comments"></i> 2 Comments</li>
                                </ul>
                                <h4 class="title"><a href="">The quality role of the elementary teacher in education</a></h4>
                                <a href="" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="">
                                    <img src="{{ asset('themes/webpage/images/resource/news-3.jpg') }}" alt="">
                                </a>
                            </figure>
                            <span class="date"><b>20</b> SEP</span>
                        </div>
                        <div class="content-box">
                            <div class="content">
                                <ul class="post-info">
                                    <li><i class="fa fa-user"></i> by Admin</li>
                                    <li><i class="fa fa-comments"></i> 2 Comments</li>
                                </ul>
                                <h4 class="title"><a href="">The quality role of the elementary teacher in education</a></h4>
                                <a href="" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--End News Section -->

    <!-- Clients Section   -->
    {{-- <section class="clients-section">
        <div class="auto-container">
            <!-- Sponsors Outer -->
            <div class="sponsors-outer">
                <!--clients carousel-->
                <ul class="clients-carousel owl-carousel owl-theme">
                    <li class="slide-item"> <a href="#"><img src="{{ asset('themes/webpage/images/resource/client.png') }}" alt=""></a> </li>
                    <li class="slide-item"> <a href="#"><img src="{{ asset('themes/webpage/images/resource/client.png') }}" alt=""></a> </li>
                    <li class="slide-item"> <a href="#"><img src="{{ asset('themes/webpage/images/resource/client.png') }}" alt=""></a> </li>
                    <li class="slide-item"> <a href="#"><img src="{{ asset('themes/webpage/images/resource/client.png') }}" alt=""></a> </li>
                    <li class="slide-item"> <a href="#"><img src="{{ asset('themes/webpage/images/resource/client.png') }}" alt=""></a> </li>
                </ul>
            </div>
        </div>
    </section> --}}
    <!--End Clients Section -->

    <!-- Main Footer -->
    <x-footer />
    <!--End Main Footer -->


@stop
