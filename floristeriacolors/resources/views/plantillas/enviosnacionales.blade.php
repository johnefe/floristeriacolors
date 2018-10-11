<!-- envios nacionales  -->
            <section id="" class="trespasos">
                <div class="container">
                    <div class="row titulo-pasos" >
                        <div class="col-md-8 col-md-offset-2">
                            <h2>¿QUIERES REALIZAR UN ENVÍO NACIONAL?</h2><br>
                        </div>
                        <!-- ciudades -->
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <p style="color: #000 !important; font-size: 20px !important;">En <strong>Rosas Don Victorio</strong>, estamos expandiendonos, y enviando arreglos florales a mucha más gente. Conoce nuestros productos que son de envío nacional.  Ahora la distancia ya no es un pretexto para no demostrarle tus sentimientos a esa persona que especial en tu  vida.</p><br>
                        </div>
                        @foreach($ciudades as $ciudad)
                        <div class="col-lg-6 col-md-6 col-xs-6   trespasos-member text-center">
                            <div class="row">
                                <a href="/arreglos/ciudades/{{$ciudad->id}}">
                                    <div class="col-md-12">
                                        <span class="fa fa-building fa-4x"></span>
                                    </div>
                                    <h3><strong>{{$ciudad->nombre}}</strong></h3>
                                </a>

                            </div>
                            
                            
                        </div>
                        @endforeach
                        <!-- -->
                      
                    </div>
                </div>

            </section>


<!-- envios nacionales -->