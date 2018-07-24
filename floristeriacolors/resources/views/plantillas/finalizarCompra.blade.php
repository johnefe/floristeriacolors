@extends('layouts.base')

@section('content')

<section class="resumenCarrito">
    <div class="container"><br><br><br><br><br>
        <div class="row">
            <!--Datos comprador y destinatario -->
            <div class="col-lg-7 col-md-7">
                <h3 class="">Vamos a finalizar la compra</h3>
            </div>
            <div class="col-lg-5 col-md-5 resumenCarrito-detalles">
                 <!--carrito de compras -->
                <div class="">
                    <div class="col-md-12 text-center"><br>
                        <h3><strong>RESUMEN DE TU COMPRA</strong></h3><br>
                    </div>
                    <div class="col-md-12">
                    <!-- un detalle-->
                      <div class="row">
                     
                            <h3>{{$details}</h3>
                        
                                                
                      </div>

                      <hr>
                      <!--fin un detalle -->
                    </div>
                    <div class="col-md-12 text-center">
                        <h2>SUBTOTAL:<strong id="subtotalCarrito">0</strong></h2><br>
                    </div>
                </div>
            <!--fin carrito de compras -->
            </div>
        </div>

        
    </div>
</section>

@stop