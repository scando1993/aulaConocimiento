@extends('layouts.app')

@section('contentheader_title')
	
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">

					@foreach ($nombre as $ev3)
						{{$ev3->titulo}}	
						@if ($ev3==end($nombre))
							<embed src="/aulaConocimiento/resources/docs_blocks/Accion/{{$ev3->ruta}}" type="application/pdf" width="800" height="700"></embed>	
						@endif	
    				@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection
