@extends('layouts.webpage')

@section('content')


    <!-- Start main-content -->
    <section class="page-title" style="background-image: url({{ asset('themes/webpage/images/background/page-title.jpg') }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">
                    Gracias
                </h1>
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{ route('index_main') }}">Home</a>
                    </li>
                    <li>Gracias</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <section>
        <div class="container pb-100">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <b>Estimado</b>
                        <h3>{{ $sale->clie_full_name }}</h3>
                        <p>
                            A nombre de toda la familia de <b style="font-weight: 700;">{{ env('APP_NAME') }}</b> te damos la bienvenida a nuestra plataformas de
                            estudio, al mismo tiempo te hacemos recordar que cualquier duda puedes comunicarte con nuestro equipo de
                            asesores.
                        </p>
                        <p>
                            Los accesos al campus virtual han sido enviados a tu correo: <b style="font-weight: 700;">{{ $sale->email }}</b>
                        </p>
                        <h5>
                            <i class="fa fa-heart"></i> Gracias por tu compra
                        </h5>
                        <hr>

                        <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                            <table class="is-hoverable w-full text-left">
                                <thead>
                                    <tr>
                                        <th
                                        class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                                        >
                                        Producto
                                        </th>
                                        <th
                                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                                        >
                                        Precio
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)

                                    <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <div class="flex items-center space-x-4">
                                                <div class="avatar">
                                                <img
                                                    class="rounded-full"
                                                    src="{{ asset('themes/webpage/images/object/object-15.jpg') }}"
                                                    alt="avatar"
                                                />
                                                </div>

                                                <span class="font-medium text-slate-700 dark:text-navy-100">
                                                    {{ $course->name }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                            S/ {{ $course->price }}
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <span>TOTAL:</span>
                        <span><i class="fa fa-heart" aria-hidden="true"></i>&nbsp; <div id="totalid">S/ {{ $sale->total }}</div></span>


                        <a href="{{ route('login') }}" class="theme-btn btn-style-one"><span class="btn-title">Campus Virtual</span></a>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@stop
