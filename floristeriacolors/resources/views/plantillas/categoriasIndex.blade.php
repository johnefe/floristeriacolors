<!-- categorias en el incio de la app-->
            <section id="" class="section-cat">
                <div class="container">
                    <div class="row titulo-pasos" >
                    <div class="col-md-8 col-md-offset-2">
                            <h2>CATEGORÍAS</h2><br>
                        </div>
                    <!-- inicio categorias-->

                    @foreach($categories as $categoria)
                       

                        <!-- -->
                        <div class="col-md-3 puntos-win">
                        <div class="devider1 text-center">
                            <span class="fa fa-star fa-2x"></span>
                            <span class="fa fa-star fa-2x"></span>
                        </div>
                        <div class="win text-center">
                             <p>
                            Con <strong>Rosas Don Victorio</strong> Ganas Puntos en cada compra que realices y puedes utilizalos <h5>para pagar tus proximos arreglos.!</h5>
                        </p>
                            <a href="/arreglos/categorias/{{$categoria->id}}" class="ver-info-puntos form-control">{{$categoria->name}}</a>
                        </div>
                       
                    </div>
                     
                     @endforeach
                      
                       <!-- inicio categorias--> 
                       
                    </div>
                </div>

            </section>


      <!-- fin categorias en el inico de la app-->