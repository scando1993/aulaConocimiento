@extends('layouts.app')

@section('contentheader_title')
     CURSOS
@endsection

@section('main-content')

    <div class="row" style="width : 80%; margin : 0 auto;">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('curso.create') }}"> Crear nuevo curso</a>
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
            <th>No</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Duracion</th>
            <th>Fecha de Inicio</th>
            <th>Fecha de Fin</th>
            <th>Estado</th>

            <th width="280px">Acciones</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $item->nombre }}</td>
        <td>{{ $item->descripcion }}</td>
        <td>{{ $item->duracion }}</td>
        <td>{{ $item->fecha_inicio }}</td>
        <td>{{ $item->fecha_fin }}</td>
        <td>{{ $item->estado }}</td>
        <td>
            {{--<a class="btn btn-info" href="{{ route('curso.edit',$item->id) }}">Editar</a>--}}
            <a class="btn btn-info" data-toggle="modal" data-target="#editcurso{{ $item->id }}"> 
                <span class="glyphicon glyphicon-pencil"></span>
            </a>


            <a class="btn btn-danger" data-toggle="modal" data-target="#ecurso{{ $item->id }}"> 
                <span class="glyphicon glyphicon-remove"></span>
            </a>

            
            
            
        </td>
    </tr>
    @endforeach
    </table>

    {!! $items->render() !!}

@endsection