@extends('layouts.app')

@section('contentheader_title')
	
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
<<<<<<< HEAD
					@foreach ($nombre as $ev3)
    					@if ($ev3 == end($nombre))
    						<embed src="/aulaConocimiento/resources/docs_blocks/Accion/{{$ev3->ruta}}" type="application/pdf" width="800" height="700"></embed>
    					@endif

    				@endforeach
=======
					@foreach ($nombre as $ev3)	
						@if ($ev3==end($nombre))
							<embed src="/aulaConocimiento/resources/docs_blocks/Accion/{{$ev3->ruta}}" type="application/pdf" width="800" height="700"></embed>	
						@endif	
    				@endforeach

>>>>>>> e4689550d3f57b9f277a49d0b353b8f265c4e8f4
				</div>
			</div>
		</div>
	</div>
@endsection
