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
            <span id = "total_productos">0 programas en el carrito.</span>
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
                <tbody id="cart">
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
                @csrf
                <div id="divCartHidden" style="display: none">
                </div>
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
                  <button type="button" class="theme-btn btn-style-one" id="btn-crear-cuenta"
                  data-sitekey="reCAPTCHA_site_key"
                  data-callback='onSubmit'
                  data-action='submit'
                  disabled>
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
      cargarItemsCarritoBD();

      function cargarItemsCarritoBD() {
          document.getElementById('cart').innerHTML =
              ""; // BORRAR contenido de la vista, antes de cargar de la base de datos
          let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
          myIds = [];
          carrito.forEach(function(item) {
              // Hacer algo con cada elemento del carrito

              myIds.push(parseInt(item.id));
          });

          btnCrear = document.getElementById("btn-crear-cuenta");
                      btnCrear.setAttribute("disabled", "disabled");
          realizarConsulta(myIds);
      }

      function realizarConsulta(ids) {
          // Realizar la petición Ajax
          var csrfToken = "{{ csrf_token() }}";


          $.ajax({
              url: "{{ route('onlineshop_get_item_carrito') }}",
              type: 'POST',
              data: {
                  ids: ids
              },
              dataType: 'json',
              headers: {
                  'X-CSRF-TOKEN': csrfToken
              },
              success: function(respuesta) {
                  // Obtén una referencia al elemento div por su ID
                  var divCartHidden = document.getElementById("divCartHidden");

                  respuesta.items.forEach(function(item) {
                      // Accede a las propiedades del objeto
                      renderProducto(item);
                      // Crea un elemento input oculto
                      let inputHidden = document.createElement("input");
                      // Establece los atributos del input
                      inputHidden.type = "hidden";
                      inputHidden.name = "item_id[]"; // Asigna el nombre que desees
                      inputHidden.value = item.id; // Asigna el valor que desees
                      // Agrega el input al div
                      divCartHidden.appendChild(inputHidden);
                  });

                  btnCrear = document.getElementById("btn-crear-cuenta");
                      btnCrear.removeAttribute("disabled");

              },
              error: function(xhr) {
                  // Ocurrió un error al realizar la consulta
                  console.log(xhr.responseText);
                  // Aquí puedes manejar el error de alguna manera
              }
          });

      }

      function renderProducto(respuesta) {

          var cart = document.getElementById('cart');
          if (cart != null) {
              var id = respuesta.id;
              var teacher = respuesta.teacher;
              var teacher_id = respuesta.teacher_id;
              var avatar = respuesta.avatar;
              var image = respuesta.image;
              var name = respuesta.name;
              var price = respuesta.price;
              var modalidad = respuesta.additional;
              var url_campus = "";
              var url_descripcion_programa = "/descripcion-programa/"+id; // esta ruta deberá corregirse si se cambia el el get de la RUTA :S

              /*
              <tr class="cart_item" id="` + id + `_pc">
                        <td class="product-remove">
                            <a title="Remove this item" class="remove" href="#">×</a>
                        </td>
                        <td class="product-thumbnail">
                            <a href="#">
                                <img alt="product" src="` + image + `">
                            </a>
                        </td>
                        <td class="product-name">
                            <a href="`+url_descripcion_programa+`" target="_blank">` + name + `</a>
                            <ul class="variation">
                                <li class="variation-size"><b>` + modalidad + `</b></li>
                            </ul>
                        </td>
                        <td class="product-price"><span class="amount"><b>S/ ` + price + `</b></span></td>
                    </tr>
              */

              cart.innerHTML += `
          <tr class="cart_item" id="` + id + `_pc">
                        <td class="product-remove">
                            <a title="Eliminar este Curso" class="remove" onclick="eliminarproducto({ id: ` + id + `, nombre: '` +
                                name + `', precio: ` + price + ` });">X</a>
                        </td>
                        <td class="product-thumbnail">
                            <a href="#">
                                <img alt="product" src="` + image + `">
                            </a>
                        </td>
                        <td class="product-name">
                            <a href="`+url_descripcion_programa+`" target="_blank">` + name + `</a>
                            <ul class="variation">
                                <li class="variation-size"><b>` + modalidad + `</b></li>
                            </ul>
                        </td>
                        <td class="product-price"><span class="amount"><b>S/ ` + price + `</b></span></td>
                    </tr>
                      `;
          }
      }
  </script>

<script>
  function confirmSubmit(event) {
event.preventDefault(); // Evita que el formulario se envíe automáticamente
carrito = JSON.parse(localStorage.getItem("carrito")) || [];
console.log(carrito);
if(carrito.length>0){
  console.log(event);
  event.target.form.submit();
}else
alert("No has elegido ningún curso");

}
</script>


<script>
  function onSubmit(token) {
    document.getElementById("CartForm").submit();
  }
</script>
  <!--cart Start-->

@stop
