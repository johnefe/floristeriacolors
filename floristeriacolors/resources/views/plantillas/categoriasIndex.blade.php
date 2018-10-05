<!-- categorias en el incio de la app-->
            <section id="" class="section-cat">
                <div class="container">
                    <div class="row titulo-pasos" >
                    
                    <!-- inicio categorias-->

                    @foreach($categories as $categoria)
                        <div class="col-md-3  trespasos-member text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="fa fa-shopping-basket fa-4x"></span>
                                </div>
                                
                            </div>
                            
                            <a href="/arreglos/categorias/{{$categoria->id}}">{{$categoria->name}}</a>
                        </div>
                     
                     @endforeach
                      
                       <!-- inicio categorias--> 
                       
                    </div>
                </div>

            </section>


      <!-- fin categorias en el inico de la app-->