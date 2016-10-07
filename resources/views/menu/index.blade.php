@extends('layouts.app')

@section('contentheader_title')
     Menu
@endsection


@section('content')
    <div>
        @foreach ($data as $menu)
            <p>{{ $menu->titulo }}</p>
            <p>{{ $menu->id_padre }}</p>
        @endforeach
    </div>
@endsection