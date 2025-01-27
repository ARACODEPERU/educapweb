@extends('layouts.webpage')

@section('content')


  <!-- Start main-content -->
  <section class="page-title" style="background-image: url({{ asset('themes/webpage/images/background/page-title.jpg') }});">
    <div class="auto-container">
      <div class="title-outer">
        <h1 class="title">
          Mi Carrito
        </h1>
        <ul class="page-breadcrumb">
            <li>
                <a href="">Home</a>
            </li>
            <li>Mi Carrito</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- end main-content -->

  <!--cart Start-->
  <section>
    <div class="container pb-100">
      <div class="section-content">
        <div class="row">
          <div class="col-md-8">
            <span>0 programas en el carrito.</span>
            <div class="table-responsive">
              <table class="table table-striped table-bordered tbl-shopping-cart">
                <thead>
                  <tr>
                    <th style="width: 5px;"></th>
                    <th style="width: 30px;">Imagen</th>
                    <th>Producto</th>
                    <th style="width: 135px;">Precio</th>
                  </tr>
                </thead>
                <tbody>
                    <tr class="cart_item">
                        <td class="product-remove">
                            <a title="Remove this item" class="remove" href="#">×</a>
                        </td>
                        <td class="product-thumbnail">
                            <a href="#">
                                <img alt="product" src="{{ asset('themes/webpage/images/resource/products/1.jpg') }}">
                            </a>
                        </td>
                        <td class="product-name">
                            <a href="">Título del curso</a>
                            <ul class="variation">
                                <li class="variation-size">Categoria</li>
                            </ul>
                        </td>
                        <td class="product-price"><span class="amount">S/ 50.00</span></td>
                    </tr>
                    <tr class="cart_item">
                        <td class="product-remove">
                            <a title="Remove this item" class="remove" href="#">×</a>
                        </td>
                        <td class="product-thumbnail">
                            <a href="#">
                                <img alt="product" src="{{ asset('themes/webpage/images/resource/products/2.jpg') }}">
                            </a>
                        </td>
                        <td class="product-name">
                            <a href="">Título del curso</a>
                            <ul class="variation">
                                <li class="variation-size">Categoria</li>
                            </ul>
                        </td>
                        <td class="product-price">
                          <span class="amount">S/ 50.00</span>
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td class="product-remove">
                          <a title="Remove this item" class="remove" href="#">×</a>
                        </td>
                        <td class="product-thumbnail">
                          <a href="#">
                            <img alt="product" src="{{ asset('themes/webpage/images/resource/products/3.jpg') }}">
                          </a>
                        </td>
                        <td class="product-name">
                          <a href="">Título del curso</a>
                          <ul class="variation">
                              <li class="variation-size">Categoria</li>
                          </ul>
                        </td>
                        <td class="product-price">
                          <span class="amount">S/ 50.00</span>
                        </td>
                    </tr>
                </tbody>
              </table>
            </div>
            <div class="sidebar__single sidebar__post wow fadeInUp animated animated"
                data-wow-delay="0.2s"
                style="padding: 15px 25px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <h2 class="sidebar__title" style="margin-top: 10px;">
                  <i class="fa fa-heart" aria-hidden="true"></i>&nbsp; TOTAL : &nbsp; <div id="totalid">S/ 0.00</div>
              </h2>
            </div>
          </div>
          <div class="col-md-4">
            <h4>Datos del comprador</h4>
            <form class="form" action="#">
              <div class="row">
                <div class="col-md-12 mb-10">
                  <input type="text" class="form-control" placeholder="Nombres" value="">
                </div>
                <div class="col-md-6 mb-10">
                  <input type="text" class="form-control" placeholder="Apellido Paterno" value="">
                </div>
                <div class="col-md-6 mb-10">
                  <input type="text" class="form-control" placeholder="Apellido Materno" value="">
                </div>
                <div class="col-md-6 mb-10">
                  <select class="form-control">
                    <option>Tipo de documento</option>
                    <option>DNI</option>
                    <option>RUC</option>
                    <option>Doc.trib.no.dom.sin.ruc</option>
                  </select>
                </div>
                <div class="col-md-6 mb-10">
                  <input type="text" class="form-control" placeholder="N° Documento" value="">
                </div>
                <div class="mb-10">
                  <input type="text" class="form-control" placeholder="Teléfono" value="">
                </div>
                <div class="mb-10">
                  <input type="text" class="form-control" placeholder="Correo electrónico" value="">
                </div>
                <div class="mb-30">
                  <button type="button" class="theme-btn btn-style-one">
                    <span class="btn-title">Crear cuenta</span>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function quantity(index, masmen, price) {
            let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            if (masmen == 1) {
                carrito[index].quantity = parseInt(carrito[index].quantity) + 1;
            }
            if (masmen == 0) {
                if (carrito[index].quantity > 1) {
                    carrito[index].quantity = parseInt(carrito[index].quantity) - 1;
                }
            }
            document.getElementById("p_q_" + carrito[index].id).value = carrito[index]
                .quantity; //cambiar valor en el los inputHidden del form pay
            localStorage.setItem('carrito', JSON.stringify(carrito));
            carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            console.log(carrito[index].quantity);
            console.log(carrito[index].quantity * price);
            document.getElementById(index + "qty").value = carrito[index].quantity;
            let tempSubTotal = carrito[index].quantity * price;
            document.getElementById(index + "subTotal").innerHTML = "S/ " + formatearNumero(tempSubTotal);
            getTotal();
        }
    </script>
    <script>
        function confirmSubmit(event) {
            event.preventDefault(); // Evita que el formulario se envíe automáticamente
            carrito = JSON.parse(localStorage.getItem("carrito")) || [];
            console.log(carrito);
            if (carrito.length > 0) {
                console.log(event);
                event.target.form.submit();
            } else
                alert("No has elegido ningún curso");

        }
        function formatearNumero(numero) {
    // Convertir el número a un string con dos decimales
    let numeroConDecimales = Number(numero).toFixed(2);
    // Formatear el número con separadores de miles y decimales
    return numeroConDecimales.toLocaleString('es-PE');

    }
    </script>


    <script>
        function onSubmit(token) {
            document.getElementById("CartForm").submit();
        }
    </script>
  <!--cart Start-->

@stop
