@extends('layouts.base')

@section('content')

<section class="resumenCarrito">
    <div class="container"><br><br><br><br><br>
        <div class="row">
            <!--Datos comprador y destinatario -->
            
            <div class="col-lg-4 col-md-offset-4 col-md-5 resumenCarrito-detalles">
                 <!--carrito de compras -->
                <div class="">
                    <div class="col-md-12 text-center"><br>
                        <h3><strong>RESUMEN DE TU COMPRA</strong></h3><br>
                    </div>
                    <div class="col-md-12">
                    <!-- un detalle-->
                      <div class="row text">
                    <?php

                    $total=0;
                    foreach($detailss as $detail){

                         echo '<strong>Cantidad: </strong>'.$detail['cantidadObjeto'].'<br><strong>Detalle: </strong>'.$detail['nombreObjeto'].'<br><strong>Precio: </strong>'.$detail['valorObjeto'].'<hr>';

                         $total= $total + $detail['valorObjeto'];
                    }
                                                 
                    ?>                      
                      </div>

                      <hr>
                      <!--fin un detalle -->
                    </div>
                    <div class="col-md-12 text-center">
                        <?php 
                         echo '<h2>TOTAL A PAGAR:</h2><h3><strong id="subtotalCarrito">$'.$total.'</strong></h3><br>';
                        ?>
                    </div>
                    <div class=" col-md-6 col-md-offset-3">
                        <form>
                            <script
                                src="https://checkout.epayco.co/checkout.js"
                                class="epayco-button"
                                data-epayco-key="c14bb0689238c33210b1f334ebfff74d"
                                data-epayco-amount="<?php echo $total; ?>"
                                data-epayco-name="Gracias por tu compra"
                                data-epayco-description="Gracias por tu compra, tu compra sera entregada, ya te estaremos llamando."
                                data-epayco-currency="cop"
                                data-epayco-country="co"
                                data-epayco-test="true"
                                data-epayco-external="false"
                                data-epayco-response="http://127.0.0.1:8000/"
                                data-epayco-confirmation="http://127.0.0.1:8000/">
                            </script>

                        </form>         
            </div> 
                </div>
            <!--fin carrito de compras -->
            </div>
        </div>

        
    </div>
</section>

@stop