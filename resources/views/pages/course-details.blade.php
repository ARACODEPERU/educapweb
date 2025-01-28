@extends('layouts.webpage')

@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Titulo del Curso</h1>
                <ul class="page-breadcrumb">
                    <li><a href="">Home</a></li>
                    <li>Descripción del Curso</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <!--Start courses Details-->
    <section class="course-details">
        <div class="container">
            <div class="row flex-xl-row-reverse">
                <div class="col-xl-8 col-lg-8">
                    <div class="courses-details__content">
                        <img src="{{ asset('themes/webpage/images/resource/course-details.jpg') }}" alt="" />
                        <h2 class="mt-4">Presentación del curso</h2>
                        <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing.</p>

                        <div class=" mt-25">
                            <ul class="accordion-box wow fadeInRight">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">Malla Curricular
                                        <div class="icon fa fa-plus"></div>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">
                                                1. MÓDULO I: LA CONTRATACION LABORAL EN EL SECTOR PRIVADO.
                                                <br>
                                                2. MÓDULO II: BENEFICIOS SOCIALES EN EL RÉGIMEN LABORAL DE LA ACTIVIDAD PRIVADA (CTS, GRATIFICACIONES, VACACIONES, UTILIDADS Y ASIGNACIÓN FAMILIAR) - TALLER PARTE I.
                                                <br>
                                                3. MÓDULO III: BENEFICIOS SOCIALES EN EL RÉGIMEN LABORAL DE LA ACTIVIDAD PRIVADA (CTS, GRATIFICACIONES, VACACIONES, UTILIDADS Y ASIGNACIÓN FAMILIAR) - TALLER PARTE II.
                                                <br>
                                                4. MÓDULO IV: ANALISIS DE LOS PRINCIPALES DERECHOS LABORALES LEY DE IGUALDAD SALARIAL Y ACOSO SEXUAL
                                                <br>
                                                5. MÓDULO V: INVESTIGACIÓN DE ACCIDENTES, INCIDENTES Y ENFERMEDADES OCUPACIONALES REGISTROS OBLIGATORIOS DE UN SISTEMA EN SEGURIDAD Y SALUD EN EL TRABAJO.
                                                <br>
                                                6. MÓDULO VI: SISTEMA DE SEGURIDAD Y SALUD EN LE TRABAJO (IPERC) Y SU ADECUACIÓN CONFORME A LOS REGLAMENTOS Y PROCEDIMIENTOS EN SEGURIDAD.
                                                <br>
                                                7. MÓDULO VII: SISTEMA DE INSPECCIÓN EN EL TRABAJO / FISCALIZACIÓN LABORAL EN EL PERÚ: ASPECTOS GENERALES Y REGULACIÓN ACTUAL.
                                                <br>
                                                8. MÓDULO VIII: EL PROCEDIMIENTO ADMINISTRATIVO SANCIONADOR DEL SISTEMA DE INSPECCIÓN DEL TRABAJO: AUTORIDAD INSTRUTORA, AUTORIDAD SANCIONADORA Y TRÁMITE.
                                                <br>
                                                9. MÓDULO IX: TECNICAS DE FISCALIZACION DE LA SUNAFIL EN MATERIA DE DERECHOS LABORALES.
                                                <br>
                                                10. MÓDULO X: TECNICAS DE INSPECCION DE LA SUNAFIL EN MATERIA DE SEGURIDAD Y SALUD EN EL TRABAJO.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">Beneficios
                                        <div class="icon fa fa-plus"></div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">Plana Docentes
                                        <div class="icon fa fa-plus"></div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">Preguntas Frecuentes
                                        <div class="icon fa fa-plus"></div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4">
                    <div class="course-sidebar">
                        {{-- <ul class="course-details-info">
                            <li class="course-details-info-link">
                                <span class="course-details-info-icon"><i class="far fa-clock"></i></span>
                                Durations: <span>10 hours</span>
                            </li>
                            <li class="course-details-info-link">
                                <span class="course-details-info-icon"><i class="far fa-folder-open"></i></span>
                                Lectures: <span>15</span>
                            </li>
                            <li class="course-details-info-link">
                                <span class="course-details-info-icon"><i class="far fa-user-circle"></i></span>
                                Students: <span>Max 50</span>
                            </li>
                            <li class="course-details-info-link">
                                <span class="course-details-info-icon"><i class="far fa-flag"></i></span>
                                Skill Level: <span>Advanced</span>
                            </li>
                            <li class="course-details-info-link">
                                <span class="course-details-info-icon"><i class="far fa-bell"></i></span>
                                Language: <span>English</span>
                            </li>
                        </ul> --}}

                        <div class="course-details-price">
                            <p class="course-details-price-text">Precio del curso</p>
                            <p class="course-details-price-amount">S/ 50.00</p>
                            <a class="theme-btn btn-style-two course-details-price-btn">
                                <i class="lnr-icon-shopping-cart" style="font-size: 20px;"></i>&nbsp; Agregar al carrito
                            </a>
                        </div>

                        <div class="latest-course mb-30">
                            <h4 class="latest-course-title mb-30">Nuevos Cursos</h4>
                            <div class="latest-course-item">
                                <div class="latest-course-img">
                                    <img src="{{ asset('themes/webpage/images/resource/course-1.jpg') }}" alt="">
                                </div>
                                <div class="latest-course-content">
                                    <h5><a href="page-course-details.php">Modern Languages</a></h5>
                                    <a class="latest-course-author" href="#">Categoria</a>
                                    {{-- <div class="latest-course-stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>4.8</span>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="latest-course-item">
                                <div class="latest-course-img">
                                    <img src="{{ asset('themes/webpage/images/resource/course-2.jpg') }}" alt="">
                                </div>
                                <div class="latest-course-content">
                                    <h5><a href="page-course-details.php">Modern Technologies</a></h5>
                                    <a class="latest-course-author" href="#">Categoria</a>
                                    {{-- <div class="latest-course-stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>5.0</span>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="latest-course-item">
                                <div class="latest-course-img">
                                    <img src="{{ asset('themes/webpage/images/resource/course-3.jpg') }}" alt="">
                                </div>
                                <div class="latest-course-content">
                                    <h5><a href="page-course-details.php">Development Studies</a></h5>
                                    <a class="latest-course-author" href="#">Categoria</a>
                                    {{-- <div class="latest-course-stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>4.9</span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End courses Details-->


@stop
