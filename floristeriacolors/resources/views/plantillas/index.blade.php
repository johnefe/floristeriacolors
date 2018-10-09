@extends('layouts.base')

@section('content')
     
      
      <!-- seccion 1  -->

        <section id="facts" class="facts" >
        
                <div id="myCarousel" class="carousel" data-ride="carousel">
                  <!-- Indicators -->
                  <!-- Wrapper for slides -->
                    <div class="carousel-inner" >
                            <!-- sliders-->
                           
                            @foreach($sliders as $slider)

                                <div class="item t @if($slider->id === 4) active  @endif" data-interval="1000">
                                     <img src="/img/arreglos/slider/{{$slider->imagen}}" alt="Floristeria Rosas Don Victorio" class="filtro-1">
                                    <!-- -->
                                    <div class="row ">
                                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 text-center" >
                                            <h3  class="wow slideInLeft animated "><strong>{{$slider->descripcion}}</strong></h3>
                                            <br>
                                            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center btn-en">
                                                <a href="/arreglos" class="btn-entrada text-center"> REALIZA TU ARREGLO FLORAL </a>
                                            </div> <br><br><br><br><br>
                            
                                                @foreach($datas as $data)
                                                <a href="{{$data->facebook}}" target="blank" class="red "><img src="/img/icons/facebook.svg" class="icon-red"></span></a>
                                                <a href="{{$data->instagram}}" target="blank" class="red"><img src="/img/icons/instagram.svg" class="icon-red"></span></a>
                                                <a href="{{$data->pinterest}}" target="blank" class="red"><img src="/img/icons/pinterest.svg" class="icon-red"></span></a>
                                                @endforeach
                                            
                                        </div>
                                    </div>
                                    <!-- -->

                                </div>

                            @endforeach
                          
                            <!-- -->
                        </div>

                        <!-- Left and right controls -->
                          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <!--<span class="fa fa-chevron-left fa-1x"></span>
                            <span class="sr-only">Previous</span>-->
                          </a>
                          <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <!--<span class="fa fa-chevron-right fa-1x"></span>
                            <span class="sr-only">Next</span>-->
                          </a>
                        </div>
        
        </section><br><br>

      <!-- fin seccion 1-->
@include('plantillas.categoriasindex')

@include('plantillas.enviosnacionales')

@include('layouts.categorias')


@include('layouts.trespasos')

      <!-- formas de pago -->
        <section id="" class="formasPago">
            <div class="container">
                <div class="row" >

                    <div class="col-md-6 col-md-offset-3">
                        <img src="img/medios.png" class="img-responsive">
                    </div>
                </div>
            </div>

        </section>


      <!--fin formas de pago -->

        <section id="slider" class="sliderO">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            
                <!-- Indicators bullet -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- End Indicators bullet -->              
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    
                    <!-- single slide -->
                    <div class="item active">
                        <div class="carousel-caption">
                            <h5 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">¿QUE OPINAN NUESTROS CLIENTES?<span></span></h5>
                            <h3 data-wow-duration="1000ms" class="wow slideInLeft animated texto">Rosas Don Victorio tiene todo lo que tu deseas expresar, con su gran variedad de productos he logrado sorprender a mis seres queridos. Gracias a Rosas Don Victorio por brindar productos de excelente calidad.</h3>
                            <p data-wow-duration="1000ms" class="wow slideInRight animated">Juan Carlos Pantoja</p>
                        </div>
                    </div>
                    <!-- end single slide -->
                    <!-- single slide -->
                    <div class="item">
                        <div class="carousel-caption">
                            <h5 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">¿QUE OPINAN NUESTROS CLIENTES?<span></span></h5>
                            <h3 data-wow-duration="500ms" class="wow slideInLeft animated texto">Es un gusto tener una floreria como la de ustedes para atendernos a las personas que estamos lejos de nuestros seres amados, les doy mil gracias el ramo de rosas llego en el momento y fecha indicado.</h3>
                            <p data-wow-duration="500ms" class="wow slideInRight animated">Jorge Luis Viveros</p>
                        </div>
                    </div>
                    <!-- end single slide -->
                      <!-- single slide -->
                    <div class="item">
                        <div class="carousel-caption">
                            <h5 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">¿QUE OPINAN NUESTROS CLIENTES?<span></span></h5>
                            <h3 data-wow-duration="500ms" class="wow slideInLeft animated texto">Encantada con los arreglos florales que compre para el dia de la mujer, son muy hermosos y llegaron a mis destinatarias en muy buenas condiciones y a la hora acordada. Gracias Rosas Don Victorio.</h3>
                            <p data-wow-duration="500ms" class="wow slideInRight animated">Luisa Fernanda Muñoz</p>
                        </div>
                    </div>
                    <!-- end single slide -->
                    
                      
                </div>
                <!-- End Wrapper for slides -->
                
            </div>
        </section>
    
       
        

@stop