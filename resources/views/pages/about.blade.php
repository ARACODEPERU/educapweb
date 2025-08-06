@extends('layouts.webpage')

@section('content')

    <!-- Main Header-->
    <x-header />
    <!--End Main Header -->
		<!-- Start main-content -->
        <section class="page-title" style="background-image: url({{ asset('themes/webpages/images/background/page-title.jpg') }});">
            <div class="auto-container">
                <div class="title-outer">
                    <h1 class="title">Sobre Nosotros</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="">Home</a></li>
                        <li>Sobre Nosotros</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end main-content -->

    

        <!-- Team Section -->
        <x-team-section />
        <!-- End Team Section -->
    <!-- Main Footer -->
    <x-footer />
    <!--End Main Footer -->

@stop