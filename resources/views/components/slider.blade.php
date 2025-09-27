<div>

    <div id="slider">
        <figure>
            {{-- @foreach ($sliders as $slide)
                <img src="{{ asset('storage/'.$slide->content) }}" alt="">
            @endforeach --}}
            <img src="{{ asset('themes/webpage/images/slider-cprod-2.jpg') }}" alt="">
            <img src="{{ asset('themes/webpage/images/slider-cprod-2.jpg') }}" alt="">
            <img src="{{ asset('themes/webpage/images/slider-cprod-2.jpg') }}" alt="">
            <img src="{{ asset('themes/webpage/images/slider-cprod-2.jpg') }}" alt="">
            <img src="{{ asset('themes/webpage/images/slider-cprod-2.jpg') }}" alt="">
        </figure>
    </div>

    <style>
        div#slider {
            overflow: hidden;
        }

        /* las imágenes no van a salir del márgen de la pantalla*/
        div#slider figure img {
            width: 20%;
            float: left;
        }

        div#slider figure {
            position: relative;
            width: 500%;
            margin: 0;
            left: 0;
            text-align: left;
            font-size: 0;
            animation: 20s slidy infinite;
            /*el movimiento se va a mantener de forma indefinida -infinito-*/
        }


        /*esta parte del código define el movimiento de las imágenes a la izquierda*/
        @keyframes slidy {
            0% {
                left: 0%;
            }

            20% {
                left: 0%;
            }

            25% {
                left: -100%;
            }

            45% {
                left: -100%;
            }

            50% {
                left: -200%;
            }

            70% {
                left: -200%;
            }

            75% {
                left: -300%;
            }

            95% {
                left: -300%;
            }

            100% {
                left: -400%;
            }
        }
    </style>

    {{-- <section class="main-slider">
        <div class="rev_slider_wrapper" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <li data-index="rs-1" data-transition="zoomout"
                        style="background-size: cover; background-position: center;">
                        <img style="width: 200px; height: auto;"
                            src="{{ asset('themes/webpage/images/slider-cprod.jpg') }}" alt="">

                    </li>
                </ul>
            </div>
        </div>
    </section> --}}
</div>
