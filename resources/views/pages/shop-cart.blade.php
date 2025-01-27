@extends('layouts.webpage')

@section('content')


  <!-- Start main-content -->
  <section class="page-title" style="background-image: url(images/background/page-title.jpg);">
    <div class="auto-container">
      <div class="title-outer">
        <h1 class="title">Mi Carrito</h1>
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
            <div class="table-responsive">
              <table class="table table-striped table-bordered tbl-shopping-cart">
                <thead>
                  <tr>
                    <th></th>
                    <th>Imagen</th>
                    <th>Producto</th>
                    <th>Precio</th>
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
                        <td class="product-price"><span class="amount">S/ 50.00</span></td>
                    </tr>
                    <tr class="cart_item">
                        <td class="product-remove"><a title="Remove this item" class="remove" href="#">×</a></td>
                        <td class="product-thumbnail"><a href="#"><img alt="product" src="images/resource/products/3.jpg"></a></td>
                        <td class="product-name"><a href="shop-product-details.php">Blue Solid Casual Shirt</a>
                        <ul class="variation">
                            <li class="variation-size">Size: <span>Large</span></li>
                        </ul></td>
                        <td class="product-price"><span class="amount">$68.00</span></td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-md-4">
            <h4>Calculate Shipping</h4>
            <form class="form" action="#">
              <div class="mb-10">
                <select class="form-control">
                  <option>Select Country</option>
                  <option>Australia</option>
                  <option>UK</option>
                  <option>USA</option>
                </select>
              </div>
              <div class="mb-10">
                <input type="text" class="form-control" placeholder="State/country" value="">
              </div>
              <div class="mb-10">
                <input type="text" class="form-control" placeholder="Postcod/zip" value="">
              </div>
              <div class="mb-30">
                <button type="button" class="theme-btn btn-style-one"><span class="btn-title">Update Totals</span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--cart Start-->

@stop