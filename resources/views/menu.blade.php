@extends('layouts.app')

@section('contentheader_title')
	
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			@foreach ($menul as $m)
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
			  <!-- Apply any bg-* class to to the icon to color it -->
					  <span class="info-box-icon bg-yellow"><i class="fa fa-folder-o"></i></span>
					  <div class="info-box-content">
					    <span class="info-box-text">{{$m->titulo}}</span>
					  </div><!-- /.info-box-content -->
					</div><!-- /.info-box -->
				</div>
			@endforeach
		</div>
		#Contenido para Vista de Menu

		
	</div>
@endsection
