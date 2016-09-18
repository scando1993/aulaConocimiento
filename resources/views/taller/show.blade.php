@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Item</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('taller.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>
                {{ $item->titulo }}
            </div>
        </div>

       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Duracion:</strong>
                {{ $item->duracion }}
            </div>
        </div>

        <div class="table-resposive">
        <table class="table-bordered table-striped">
            <tr>
                <th>Descripcion</th>
                <th>Nombre de archivo</th>
                <th>Tipo archivo</th>
            </tr>
            
            @foreach ($item->recursos as $recurso)
            <tr>
                <td>{{ $recurso->descripcion }}</td>
                <td>{{ $recurso->nombre_archivo }}</td>
                <td>{{ $recurso->extension }}</td>
            </tr>    
            @endforeach
            
        </table>
        </div>
        

    </div>

@endsection