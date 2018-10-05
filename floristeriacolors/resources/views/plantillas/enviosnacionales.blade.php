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
                        <div class="col-md-6  trespasos-member text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="fa fa-shopping-basket fa-4x"></span>
                                </div>
                                
                            </div>
                            
                            <h5>{{$ciudad->nombre}}</h5>
                        </div>
                        @endforeach
                        <!-- -->
                        <div class="col-md-4 col-md-offset-4 btnn">
                            <a href="" class="">FÁCIL, RÁPIDO Y SEGURO</a>
                        </div>
                    </div>
                </div>

            </section>


<!-- envios nacionales -->