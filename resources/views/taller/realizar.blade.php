@extends('layouts.app')

@section('contentheader_title')
     Tutoria: {{ $item->titulo }}
@endsection


@section('main-content')

   


    <!-- Slide-->

    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false" style="margin: 5%;">
      <div class="carousel-inner" role="listbox">
        <?php $i = '1'; ?>
        @foreach ($item->recursos as $recurso)
        @if($i<2)
        <div class="item active">
        @else
        <div class="item">
        @endif  
          <div style="margin-left: 20%; margin-right: 20%; margin-bottom: 2%; margin-top: 3%;">
            <strong>Actividad {{$i++}}: </strong>
            {{ $recurso->descripcion }}<br/>  
          </div>
          <div style="margin-left: 10%;">
            @if($recurso->extension===".mp4")
              <video width="800" height="700" controls><source src="/aulaConocimiento/public/Recursos/{{ $recurso->nombre_archivo }}.mp4" type="video/mp4"></video>
            @endif
            @if($recurso->extension===".pdf")
              <embed src="/aulaConocimiento/public/Recursos/{{ $recurso->nombre_archivo }}.pdf" type="application/pdf" width="800" height="700"></embed>          @endif
            @if($recurso->extension===".jpg" || $recurso->extension===".png" || $recurso->extension===".gif" || $recurso->extension===".jpeg" || $recurso->extension===".bmp")
              <img src="/aulaConocimiento/public/Recursos/{{ $recurso->archivo }}" alt="{{ $recurso->archivo }}" height="800" width="700">        
            @endif
          </div>
        </div>
        @endforeach
      </div>
      
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  
<script src="https://code.jquery.com/jquery-3.1.1.js" ></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<div style="margin-left: 40%;">
  @if($item->evaluaciones)
    <a class="btn btn-info" href="{{ URL('realizar_evaluacion',$item->id) }}">Realizar evaluacion  </a>
  @endif
</div>

@endsection