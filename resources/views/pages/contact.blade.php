@extends('layouts.webpage')

@section('content')

    <!-- Main Header-->
    <x-header />
    <!--End Main Header -->

    <!-- Start main-content -->
    <x-page-header-contact />
    <!-- end main-content -->

	<!--Contact Details Start-->
	<section class="contact-details">
		<div class="container ">
			<div class="row">
				<div class="col-xl-7 col-lg-6">
					<div class="sec-title">
						<span class="sub-title">Envíanos un correo electrónico</span>
						<h2>Siéntete libre de escribir</h2>
					</div>
					<!-- Contact Form -->
					<form id="pageContactForm" name="contact_form" action="{{ route('apisubscriber') }}" method="post">
						@csrf
                        <div class="row">
							<div class="col-sm-12">
								<div class="mb-3">
									<input name="full_name" class="form-control" type="text" placeholder="Nombre completo">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="email" class="form-control required email" type="email" placeholder="Correo electronico" name="email">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="phone" class="form-control" type="text" placeholder="Teléfono" name="phone">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<textarea id="messagePageContact" name="message" class="form-control required" rows="7" placeholder="Mensaje" name="message"></textarea>
						</div>
						<div class="mb-3">
							{{-- <input name="form_botcheck" class="form-control" type="hidden" value="" /> --}}
							<button id="submitPageContactButton" type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Enviar mensaje</span></button>
							{{-- <button type="reset" class="theme-btn btn-style-one bg-theme-color5"><span class="btn-title">Reset</span></button> --}}
						</div>
					</form>
					<!-- Contact Form Validation-->
				</div>
				<div class="col-xl-5 col-lg-6">
					<div class="contact-details__right">
						<div class="sec-title">
							<span class="sub-title">¿Necesitas ayuda?</span>
							<h2>Ponte en contacto con nosotros</h2>
							<div class="text">
								Texto corto que invite a comunicarse con la institución
							</div>
						</div>
						<ul class="list-unstyled contact-details__info">
							<li>
								<div class="icon">
									<span class="lnr-icon-phone-plus"></span>
								</div>
								<div class="text">
									<h6>¿Tienes alguna pregunta?</h6>
									<a href="tel:980089850">+51 977627207</a>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="lnr-icon-envelope1"></span>
								</div>
								<div class="text">
									<h6>Escribenos</h6>
									<a href="">
                                        correo@dominio.com
                                    </a>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="lnr-icon-location"></span>
								</div>
								<div class="text">
									<h6>Visitanos</h6>
									<span>Dirección de la oficina principal</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

    <script>
        let form = document.getElementById('pageContactForm');
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            var formulario = document.getElementById('pageContactForm');
            var formData = new FormData(formulario);

            // Deshabilitar el botón
            var submitButton = document.getElementById('submitPageContactButton');
            submitButton.disabled = true;
            submitButton.style.opacity = 0.25;

            // Crear una nueva solicitud XMLHttpRequest
            var xhr = new XMLHttpRequest();

            // Configurar la solicitud POST al servidor
            xhr.open('POST', "{{ route('apisubscriber') }}", true);

            // Configurar la función de callback para manejar la respuesta
            xhr.onload = function() {
                // Habilitar nuevamente el botón
                submitButton.disabled = false;
                submitButton.style.opacity = 1;
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    Swal.fire({
                        icon: 'success',
                        title: 'Enhorabuena',
                        text: response.message,
                        customClass: {
                            container: 'sweet-modal-zindex' // Clase personalizada para controlar el z-index
                        }
                    });
                    formulario.reset();
                } else if (xhr.status === 422) {
                    var errorResponse = JSON.parse(xhr.responseText);
                    // Maneja los errores de validación aquí, por ejemplo, mostrando los mensajes de error en algún lugar de tu página.
                    var errorMessages = errorResponse.errors;
                    var errorMessageContainer = document.getElementById('messagePageContact');
                    errorMessageContainer.innerHTML = 'Errores de validación:<br>';
                    for (var field in errorMessages) {
                        if (errorMessages.hasOwnProperty(field)) {
                            errorMessageContainer.innerHTML += field + ': ' + errorMessages[field].join(', ') +
                                '<br>';
                        }
                    }
                } else {
                    console.error('Error en la solicitud: ' + xhr.status);
                }


            };

            // Enviar la solicitud al servidor
            xhr.send(formData);
        });
    </script>
	<!--Contact Details End-->

	<!-- Divider: Google Map -->
	{{-- <section>
		<div class="container-fluid p-0">
			<div class="row">
				<!-- Google Map HTML Codes -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.843149788316!2d144.9537131159042!3d-37.81714274201087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sbn!2sbd!4v1583760510840!5m2!1sbn!2sbd" data-tm-width="100%" height="500" frameborder="0" allowfullscreen=""></iframe>
			</div>
		</div>
	</section> --}}

    <!-- Main Footer -->
    <x-footer />
    <!--End Main Footer -->

@stop
