@extends('layouts.app')

@section('contentheader_title')
     MANTENIMIENTO DE RESPUESTAS
@endsection

@section('main-content')

    <div class="row" style="width : 80%; margin : 0 auto;">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('respuesta.create') }}"> Crear nueva respuesta</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            
            <th>Respuesta</th>
            <th>Es_correcta</th>
            <th>Pregunta_id</th>
            <th>rutaImagen</th>
            

            <th width="280px">Acciones</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $item->respuesta }}</td>
        <td>{{ $item->es_correcta }}</td>
        <td>{{ $item->pregunta_id }}</td>
        <td>{{ $item->rutaImagen }}</td>
        <td>
            {{--<a class="btn btn-info" href="{{ route('respuesta.edit',$item->id) }}">Editar</a>--}}
            <a class="btn btn-info" data-toggle="modal" data-target="#editrespuesta{{ $item->id }}"> 
                <span class="glyphicon glyphicon-pencil"></span>
            </a>


            <a class="btn btn-danger" data-toggle="modal" data-target="#erespuesta{{ $item->id }}"> 
                <span class="glyphicon glyphicon-remove"></span>
            </a>

            
            
            
        </td>
    </tr>
    @endforeach
    </table>

    {!! $items->render() !!}

@endsection