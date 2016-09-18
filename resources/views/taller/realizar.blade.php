@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            </br><div class="pull-left">
                <h2> TALLER: {{ $item->titulo }}</h2></br>
            </div>
           
        </div>
    </div>

    <div class="row">
           
        <?php $i = '1'; ?>

        @foreach ($item->recursos as $recurso)

        <div class="row">
        <strong>Actividad {{$i++}}: </strong>
        {{ $recurso->descripcion }}<br/>    
            
            

        @if($recurso->extension===".mp4")
         <a class="afterglow btn btn-success" href="#myvideo{{ $recurso->id }}">Ver video </a>
        <video  id="myvideo{{ $recurso->id }}" width="960" height="540">
            <source type="video/mp4" src="../Recursos/{{ $recurso->nombre_archivo }}.mp4" />
        </video>
        @endif

        @if($recurso->extension===".pdf")
                
        {{-- <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">{{ $recurso->archivo }}</h4>
            </div>
            <div class="panel-body">
                <iframe src="../ViewerJS/index.html#../Recursos/{{ $recurso->nombre_archivo }}.pdf" width='500' height='400'></iframe>
            </div>
        </div> --}}

        <div class="pull-left">
                <a class="btn btn-success" href="../ViewerJS/index.html#../Recursos/{{ $recurso->nombre_archivo }}.pdf" target="_blank"> Ver PDF</a>
            </div>
        @endif
       
        @if($recurso->extension===".jpg")
        <script src="../lightbox/lightbox.min.js"></script>
        <a class="btn btn-success" href="../Recursos/{{ $recurso->nombre_archivo }}.jpg" data-lightbox="image-1" data-title="My caption">Ver Imagen  </a>
        @endif
        </div><br/>

        @endforeach

    

</select>

    </div>

@endsection