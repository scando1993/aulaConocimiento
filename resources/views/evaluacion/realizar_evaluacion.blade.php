@extends('layouts.app')

@section('contentheader_title')
    Evaluacion
@endsection 

@section('main-content')

<div>
	<h2>EVALUACION DE LA TUTORIA: {{$id}}</h2>
</div>


    {!! Form::open(array('action' => 'EvaluacionController@guardarEvaluacion','method'=>'POST')) !!}

    {{ Form::hidden('id', $id) }}

    {{ Form::hidden('id_eval', $id_eval) }}

    {{--*/ $i = 0 /*--}}
<div>
	@foreach ($aleatorio as $pregunta)
	<div >
		<div >
			<strong>{{$pregunta->enunciado}}</strong>
		</div>
		@if($pregunta->rutaImagen)
		<div> <img src="../Recursos/{{$pregunta->rutaImagen}}" height="200" width="600"> </div>	
		@endif
	</div>
	<div >
		@foreach ($pregunta->respuestas as $respuesta)
		<div>
			@if($respuesta->rutaImagen)
			<div > <img src="../Recursos/{{$respuesta->rutaImagen}}" height="80" width="80"> </div>	
			@endif
			<div >{{$respuesta->respuesta}}   {{ Form::checkbox('pregunta[]', $array[$i].'nn'.$respuesta->id) }}</div>
			
		</div>
		@endforeach
	</div>
		{{--*/ $i++ /*--}}

	
	@endforeach

		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
	{!! Form::close() !!}
</div>
@endsection