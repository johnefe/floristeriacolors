@extends('layouts.adminBase')


@section('content')


<div class="col-md-6">
<div class="col-md-12">

    <div class="card">
        <div class="header">
            <h4 class="title">REGISTRAR COLOR</h4>
            <p class="category">www.rosasdonvictorio.com</p>

        </div>
        <div class="content">
             {!!Form::open(['route'=> 'colores.store', 'method'=>'POST'])!!}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        {!!Form::label('Nombre color:')!!}
                        {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Escribe el nombre del color'])!!}
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-info btn-fill pull-right">REGISTRAR</button>
                <div class="clearfix"></div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="">
    <div class="card">
        <div class="header">
            <h4 class="title">COLORES REGISTRADOS</h4>
                    </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Nombre</th>
                    <th>Acciones</th>
                    
                </thead>
                <tbody>

                <!--inicio una categoria -->
                @foreach($colores as $color)
                 <tr>
                        <td>{{$color->nombre}}</td>
                        <td>
                            <button type="submit" class="btn btn-success" ><span class="fa fa-pencil fa-1x"></span></button>
                            <button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>
                        </td>
                    </tr>
                @endforeach
                   
                <!-- fin una categoria-->
                    
                </tbody>
            </table>

        </div>
    </div>
</div>
</div>
</div>

<div class="col-md-6">
    <div class="card">
        <div class="header">
            <h4 class="title">ADICIONAR PRODUCTO A COLOR</h4>

        </div>
        <div class="content">
        <script>
    $(document).ready(function(){
        $('#color_id').change(function(){
            console.log($(this).val());
            // -------------------------------------

        $.get('/colores/'+$(this).val(),
            function(data) {
                console.log(data)
                $.get('/productos',function(productos){
                    $('#checkboxes').empty();
                    $.each(productos, function(key, element) {
                        if(BuscarProducto(data,element)) {
                            console.log("encontrado")

                            $('#checkboxes').append(' <label for="one" class="form-control"> <input type="checkbox" onclick="javascript:validar(this);" id="'+element.id+'" checked="" /> '+ element.nombre + '</label>');
                            
                          
                        }
                        else {
                              $('#checkboxes').append(' <label for="one" class="form-control"> <input type="checkbox" onclick="javascript:validar(this);" id="'+element.id+'" /> '+ element.nombre + '</label>');
                              console.log("no encontrado")
                        }
                    });

                   /* $.each(data, function(key, element) {
                    $('#checkboxes').append(' <label for="one" class="form-control"> <input type="checkbox" id="" /> '+ element.nombre + '</label>');
                    });*/



                 });//cierra get Productos      
                
            });//ciera funcion y get dropdown

            //--------------------------------------
        });//cierra funcion change
    });  
    function BuscarProducto(productos,producto){
        var retorno = false;


        productos.forEach(function (k, index, productos){
            console.log("el k")
            console.log(k.id)
            console.log(producto.id)
            
            if(k.id == producto.id) {
                console.log("lo encontro")
                retorno = true;
               
            }

        });
        return retorno;


    }   
</script>

             
              
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group text-center">

                        <h3>Listas vinculadas</h3>

                        {{ Form::open() }}
                        {{ csrf_field() }}
                        {!!Form::label('Color','Escoge el color:')!!}
                            {!!Form::select('color_id',$colors,null,['class'=>'form-control', 'id' =>'color_id' ])!!}  
                        <br>
                        {{ Form::close()}}
                        </div>

                        <div class="form-group">
                            <form>
                              <div class="multiselect">
                                <div class="selectBox "  onclick="showCheckboxes()" >
                                  <select class="form-control">
                                    <option>{!!Form::label('Product','Escoge el producto')!!}</option>
                                  </select>
                                  <div class="overSelect"></div>
                                </div>
                                <div id="checkboxes">
                                  
                                </div>
                              </div>
                            </form>
                        </div>
                    </div>
                     
                </div>

                <!--<button type="submit" class="btn btn-info btn-fill pull-right">ADICIONAR</button>-->
                <div class="clearfix"></div>
            
        </div>
    </div>
</div>

<script type="text/javascript">
    var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}

function validar(obj){
    if(obj.checked==true){
        var array = {"product_id":parseInt(obj.id),"color_id":parseInt($( "#color_id" ).val())}
        console.log(obj.id);
        console.log($( "#color_id" ).val());
        console.log(array);
        console.log(JSON.stringify(array))
        

        $.ajax({
            type: "POST",
            url: "/colorproducto",
            data: JSON.stringify(array),
            contentType: "json",
            processData: false,
            success:function(data) {
                console.log(data);
            },
            error: function(error){
                console.log(error);

            }
        });

        alert("Deseas asignar este producto a este color?");
    }else{
        //elimina
        alert("Deseas quitar este producto a este color?");
    }
}
</script>
@stop