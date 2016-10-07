@extends('layouts.app')

@section('contentheader_title')
	
@endsection


@section('main-content')
	<div class="container spark-screen">
		#Contenido para Vista de Menu
		@foreach ($menuList as $menu)
			<p>{{ $menu->titulo }}</p>
			<p>{{ $menu->id_padre }}</p>
		@endforeach
	</div>
@endsection
