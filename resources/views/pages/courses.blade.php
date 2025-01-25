@extends('layouts.webpage')

@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Courses</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Courses</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->
    
    <!-- Courses Section -->
    <section class="">
        <div class="container pb-100">
            <div class="row">
                <div class="course-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="page-course-details.php">
                                    <img src="{{ asset('themes/webpage/images/resource/course-5.jpg') }}" alt="">
                                </a>
                            </figure>
                            <span class="price">S/ 50.00</span>
                            <div class="value">Categoria</div>
                        </div>
                        <div class="content-box">
                            {{-- <ul class="course-info">
                                <li><i class="fa fa-book"></i> 8 Lessons</li>
                                <li><i class="fa fa-users"></i> 16 Students</li>
                                <li><i class="fa fa-clock"></i> 3 Weeks</li>
                            </ul> --}}
                            <h5 class="title">
                                <a href="page-course-details.php">
                                    Título del curso
                                </a>
                            </h5>
                            <div class="other-info">
                                <a href="" class="theme-btn btn-style-one small">Más Información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Courses Section-->


@stop