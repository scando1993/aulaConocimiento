@extends('layouts.app')

@section('contentheader_title')
     LISTADO DE TALLERES
@endsection


@section('main-content')

    <div class="row">
        </br><div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('taller.create') }}"> Crear nuevo bloque</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
</br>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Titulo</th>
            <th>Duracion</th>
            
            <th width="280px">Acciones</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $item->titulo }}</td>
        <td>{{ $item->duracion }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('taller.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('taller.edit',$item->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['taller.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $items->render() !!}

@endsection