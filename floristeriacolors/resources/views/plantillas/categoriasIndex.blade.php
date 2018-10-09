<!-- categorias en el incio de la app-->
            <section id="" class="section-cat">
                <div class="container">
                    <div class="row titulo-cat" >
                        <div class="col-md-8 col-md-offset-2">
                            <h2>CATEGORÍAS</h2><br>
                        </div>
                    <!-- inicio categorias-->

                    @foreach($categories as $categoria)
                       

                        <!-- -->
                        <div class="col-md-3 col-md-6 col-md-offset-0 col-xs-6 col-xs-offset-3 puntos-win">
                        
                        <div class="win text-center">
                            <img class="img-category" src="/img/categorias/{{$categoria->img}}">
                            <a href="/arreglos/categorias/{{$categoria->id}}" class="ver-info-puntos form-control">{{$categoria->name}}</a>
                        </div>
                       
                    </div>
                     
                     @endforeach
                      
                       <!-- inicio categorias--> 
                       
                    </div>
                </div>

            </section>


      <!-- fin categorias en el inico de la app-->