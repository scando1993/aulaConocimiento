@extends('layouts.app')

@section('contentheader_title')
     MANTENIMIENTO DE PREGUNTAS
@endsection

@section('main-content')

    <div class="row" style="width : 80%; margin : 0 auto;">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('curso.create') }}"> Crear nueva pregunta</a>
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
            
            <th>Enunciado</th>
            <th>Ruta_Imagen</th>
            <th>Evaluacion_id</th>
            <th>Tipo</th>
            

            <th width="280px">Acciones</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $item->enunciado }}</td>
        <td>{{ $item->rutaImagen+ }}</td>
        <td>{{ $item->evaluacion_id }}</td>
        <td>{{ $item->tipopregunta }}</td>
        <td>
            {{--<a class="btn btn-info" href="{{ route('pregunta.edit',$item->id) }}">Editar</a>--}}
            <a class="btn btn-info" data-toggle="modal" data-target="#editpregunta{{ $item->id }}"> 
                <span class="glyphicon glyphicon-pencil"></span>
            </a>


            <a class="btn btn-danger" data-toggle="modal" data-target="#epregunta{{ $item->id }}"> 
                <span class="glyphicon glyphicon-remove"></span>
            </a>

            
            
            
        </td>
    </tr>
    @endforeach
    </table>

    {!! $items->render() !!}

@endsection