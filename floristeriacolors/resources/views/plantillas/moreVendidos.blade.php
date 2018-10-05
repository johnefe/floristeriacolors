@extends('layouts.adminBase')

@section('content')

@if(Session::has('message'))

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}</div>

@endif
@if(Session::has('error'))

<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span></button>
  {{Session::get('error')}}</div>

@endif
<div class="col-md-5">
    <div class="card">
        <div class="header">
            <h4 class="title">MAS VENDIDOS</h4>
            <p class="category">www.rosasdonvictorio.com</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Id</th>
                    <th>Producto</th>
                   
                </thead>
                <tbody>
                <!--inicio un precio-->
                   @foreach($mas_vendidos as $mas_vendido)
                    <tr>

                    <td>{{$mas_vendido->product->id}}</td>
                        <td>{{$mas_vendido->product->nombre}}</td>
                        <td>
                        {!!Form::open(['route'=>['mas_vendidos.destroy',$mas_vendido->id],'method'=>'DELETE'])!!}
                        
                            <button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>
                        {!!Form::close()!!}
                            
                            
                        </td>
                    </tr>
                    @endforeach 
                <!-- finr un precio -->  
                </tbody>
            </table>

        </div>
    </div>
</div>
<div class="col-md-7">
    <div class="card">
        <div class="header">
            <h4 class="title">ADICIONAR PRODUCTO A MÁS VENDIDOS</h4>

        </div>
        <div class="content">
           {!!Form::open(['route'=> 'mas_vendidos.store', 'method'=>'POST'])!!}
              
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Escoge el producto</label>
                            {!!Form::select('product_id',$productos,null,['class'=>'form-control'])!!}   
                           
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-info btn-fill pull-right">ADICIONAR</button>
                <div class="clearfix"></div>
            {!!Form::close()!!}
        </div>
    </div>
</div>

@stop