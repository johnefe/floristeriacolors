@extends('layouts.base')

@section('content')

<section class="resumenCarrito">
    <div class="container"><br><br><br><br><br>
        <div class="row">
            <!--Datos comprador y destinatario -->
            <div class="col-md-7">
             {!!Form::open(['route'=> 'cart', 'method'=>'POST'])!!}
                <div class="col-md-12">
                   
                    <!--info comprador -->

                    
                    <p></p>
                    <div class="info-final col-md-6 col-sx-12">
                        <div class="col-md-12 info-final-titulo text-center">
                            <h4><strong>DATOS QUIEN RECIBE</strong></h4>
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Nombre:</strong>{{$dataCart["nombresDestinatario"]}}</h5>  
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Dirección:</strong>{{$dataCart["direccionDestinatario"]}}</h5>  
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Teléfono:</strong>{{$dataCart["telefonoDestinatario"]}}</h5>  
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Fecha:</strong>{{$dataCart["fechaEntrega"]}}</h5>  
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Mensaje:</strong>{{$dataCart["mensaje"]}}</h5>  
                        </div>  
                    </div>
                    <!--fin info comprador -->

                    <!--info destinatario -->
                    <div class="info-final col-md-5 col-sx-12">
                        <div class="col-md-12 info-final-titulo text-center">
                            <h4><strong>DATOS QUIEN ENVÍA</strong></h4>
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Nombre:</strong>{{$dataCart["nombresComprador"]}} {{$dataCart["apellidosComprador"]}}</h5>  
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Correo:</strong>{{$correo}}</h5>  
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Teléfono:</strong>{{$dataCart["celularComprador"]}}</h5>  
                        </div>
                        <div class="col-md-12">
                         
                        </div>   
                    </div>
                  
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="radio">
                        <!--<h4>Acumularas <strong>5500 puntos</strong> por esta Compra</h4>-->
                    </div>
                </div>
                <!--<div class="col-md-12 text-center">
                     <h4> Aceptamos pagos con tarjeta de crédito o debito </h4>
                </div>-->
                <div class="col-md-10 col-md-offset-1 text-center">
                   
                   <!-- <img src="\img\pasgos.png" class="img-responsive">-->
                   <form>
                        <script
                            src="https://checkout.epayco.co/checkout.js"
                            class="epayco-button"
                            data-epayco-key="c14bb0689238c33210b1f334ebfff74d"
                            data-epayco-amount="50000"
                            data-epayco-name="Producto(s) seleccionado(s)"
                            data-epayco-description="Producto(s) seleccionado(s)"
                            data-epayco-currency="cop"
                            data-epayco-country="co"
                            data-epayco-test="true"
                            data-epayco-external="true"
                            data-epayco-response="http://127.0.0.1:8000/cuentaUsuario"
                            data-epayco-confirmation="http://127.0.0.1:8000/cuentaUsuario">
                        </script>
                    </form>
                </div> 
                 
                             
                
                            
            </div>
            <!--*********************************************-->
            
            <!--carrito de compras -->
            <div class="col-md-5 resumenCarrito-detalles">
                <div class="col-md-12 text-center"><br>
                    <h3><strong>RESUMEN DE TU COMPRA</strong></h3><br>
                </div>
                <div class="col-md-12" id="canasta" name="canasta">
                <!-- un detalle-->
                  <div class="row">
                    <H4 id="mensajeVacio"></H4>
                                            
                  </div>

                  <hr>
                  <!--fin un detalle -->
                </div>
                <div class="col-md-12 text-center">
                    <h2>SUBTOTAL:<strong id="subtotalCarrito">0</strong></h2><br>
                </div>
            </div>
            <!--fin carrito de compras -->
            <div class=" col-md-6 col-md-offset-3">
                    <input type="submit" name="" class="btn btn-primary form-control" value="PAGAR AHORA">
            </div> 
            {!!Form::close()!!}   
        </div>

        
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){

            $.ajax({
        type: "GET",
        url: "/carroVS",
        success:function(data) {

            $.ajax({
                type: "GET",
                url: "/dataCart",
                success:function(dataCart) {
                    console.log("aqui fue")
                    console.log(dataCart);

                }
            });
            console.log("carrito en el resumen")
             arrayCarrito = data;
             arrayFinal = arrayCarrito;
             var cantidadProductosEnCarrito=0;
                for(i=0;i<arrayCarrito.length;i++){
                cantidadProductosEnCarrito=cantidadProductosEnCarrito+arrayCarrito[i].cantidadObjeto;
                }
            if (cantidadProductosEnCarrito===0) {
                arrayCarrito=[];
                verCarritos(arrayCarrito);
                console.log(arrayCarrito);
            }else{
                arrayCarrito = data;
                arrayFinal = arrayCarrito;
                verCarritos(arrayCarrito);
                //alert("si hay")
                console.log(arrayCarrito)
            }
            document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;
            //console.log(arrayFinal);
        }
    });
    });
/*--------------------------------------------------------*/

                    
    function verCarritos(arrayCarrito){
        /*pa el subtotal*/
       // alert("loca")
                    var subTotal=0;
                    for(i=0; i<arrayCarrito.length;i++){
                        var subt=(arrayCarrito[i].cantidadObjeto)*arrayCarrito[i].valorObjeto;
                        subTotal=subTotal+subt;
                    }
                

                    document.getElementById("canasta").innerHTML="";
                    for (var i =0;i< arrayCarrito.length; i++) {
                  
                            var inserta='<div class="row">'+
                                '<h4 id="mensajeVacio"></h4>'+
                                '<div class="col-md-2 col-md-offset-1 col-xs-2 text-center" id="cantidadArreglo"><div class="cant"><h4>'+arrayFinal[i].cantidadObjeto+'</h4></div></div>'+
                                '<div class="col-md-4 col-xs-4" id="img-Producto"><img src="/img/arreglos/'+arrayFinal[i].imagen+'" class="img-responsive"></div>'+
                                '<div class="col-md-4 " id="COP"><strong>'+arrayCarrito[i].nombreObjeto+'</strong> <h5>'+arrayFinal[i].valorObjeto+'</h5><h4>'+arrayFinal[i].tamaño+'</h4></div>'+
                                '<br>';

                            $( "#canasta" ).append(inserta);
                    }


                    document.getElementById("subtotalCarrito").innerHTML="$ "+subTotal;
                    /*fin subtotal*/

        $.ajax({
        type: "GET",
        url: "/carroVS",
        success:function(data) {
            
             arrayCarrito = data;
             arrayFinal = arrayCarrito;
             var cantidadProductosEnCarrito=0;
                for(i=0;i<arrayFinal.length;i++){
                cantidadProductosEnCarrito=cantidadProductosEnCarrito+arrayFinal[i].cantidadObjeto;
                console.log("array");
                }
            /*pa el subtotal*/
            var subTotal=0;
            for(i=0; i<arrayFinal.length;i++){
                var subt=(arrayFinal[i].cantidadObjeto)*arrayFinal[i].valorObjeto;
                subTotal=subTotal+subt;
            }
            document.getElementById("subtotalCarrito").innerHTML="$ "+subTotal;
            /*fin subtotal*/
             console.log(arrayCarrito)
                if(cantidadProductosEnCarrito==0){
            
                    document.getElementById("canasta").innerHTML="CARRITO DE COMPRAS VACIO";
                }else{
                    console.log(arrayFinal)
                    document.getElementById("canasta").innerHTML="";
                    for (var i =0;i< arrayFinal.length; i++) {
                  
                            var inserta='<div class="row">'+
                                '<h4 id="mensajeVacio"></h4>'+
                                '<div class="col-md-2 col-md-offset-1  col-xs-2 text-center" id="cantidadArreglo"><div class="cant"><h4>'+arrayFinal[i].cantidadObjeto+'</h4></div></div>'+
                                '<div class="col-md-4 col-xs-4" id="img-Producto"><img src="/img/arreglos/'+arrayFinal[i].imagen+'" class="img-responsive"></div>'+
                                '<div class="col-md-4 " id="COP"><strong>'+arrayFinal[i].nombreObjeto+'</strong> <h5>'+arrayFinal[i].valorObjeto+'</h5><h4>'+arrayFinal[i].tamaño+'</h4></div>'+
                                '<br>';

                            $( "#canasta" ).append(inserta);
                    }
                } 


        }
    });
    
/*---------------------------------------------------*/

document.getElementById("car").innerHTML="";
}
</script>
@stop