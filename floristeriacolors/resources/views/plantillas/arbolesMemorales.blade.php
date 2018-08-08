@extends('layouts.base')

@section('content')
<section class="blog" id="blog">
    <div class="parallax-overlays">
    <div class="container ">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center titulo-memoral" >
                <h3>ÁRBOLES MEMORALES</h3>
            </div>
        </div>
        <div class="row  texto-memoral">
            <div class="col-md-6 text-center">
                <div id="myCarousel" class="carousel" data-ride="carousel" style="height: 400px !important">
                  <!-- Wrapper for slides -->
                    <div class="carousel-inner" >

                            @foreach($sliders as $slider)
                                <div class="item t @if($slider->id === 7) active  @endif " >
                                 <img src="/img/arreglos/slider/{{$slider->imagen}}" alt="Floristeria Rosas Don Victorio" class="" style="height: 400px !important;">
  
                                </div>
                            @endforeach
                    </div>
                         
                </div>
            </div>
            <div class="col-md-6  texto-memoral">
                @foreach($sliders as $slider)
                    @if($slider->id === 7)
                        <p>{{$slider->descripcion}}</p>
                        
                        <p><strong>{{$slider->nombre}}</strong></p>
                    @endif
                 @endforeach
            </div>
        </div>
    </div>
    </div>
</section>
@stop