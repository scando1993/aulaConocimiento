@extends('layouts.app')

@section('contentheader_title')
     Actividades
@endsection


@section('main-content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            
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
                <th>Actividad</th>
                <th>Descripcion</th>
                <th>Nombre de archivo</th>
                <th>Tipo archivo</th>
                <th>Acciones</th>
            </tr>
            
            @foreach ($item->recursos as $recurso)
            <tr>
                <th>{{ $recurso->orden }}</th>
                <td>{{ $recurso->descripcion }}</td>
                <td>{{ $recurso->nombre_archivo }}</td>
                <td>{{ $recurso->extension }}</td>
                <td NOWRAP>
                    <a class="btn btn-primary" href="">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['recurso.destroy', $recurso->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>   
                
            @endforeach
            {!! Form::open(array('route' => 'recurso.store','method'=>'POST','files' => true)) !!}
            {{ Form::hidden('taller_id', $item->id) }}
            {{ Form::hidden('archivo', '') }}
            {{ Form::hidden('nombre_archivo', '') }}
            {{ Form::hidden('extension','' ) }}
            

            <tr>
                <td>{!! Form::number('orden', null, array('placeholder' => '#','class' => 'form-control')) !!}</td>
                <td>{!! Form::text('descripcion', null, array('placeholder' => 'Nueva descripcion','class' => 'form-control')) !!}</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    
                      <label class="col-md-4 control-label">Nuevo Archivo</label>
                      <div class="col-md-6">
                        <input type="file" class="form-control" name="file" >
                    </div>
                     
                </td>
             
                <td>
                    <button type="submit" class="btn btn-sucess">Guardar</button>
                   
                </td> 
            </tr>
            {!! Form::close() !!}
        </table>
        </div>
        

    </div>

@endsection