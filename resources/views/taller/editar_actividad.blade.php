@extends('layouts.app')

@section('contentheader_title')
     EDICIÓN DE ACTIVIDADES
@endsection
 
@section('main-content')

    

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($item, ['method' => 'PATCH','route' => ['recurso.update', $item->id],'files'=>true]) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numero de actividad:</strong>
                {!! Form::number('orden', null, array('placeholder' => '#','class' => 'form-control')) !!}
            
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion:</strong>
                {!! Form::text('descripcion', null, array('placeholder' => 'Nueva descripcion','class' => 'form-control')) !!}
            </div>
        </div>
               
            
            <label class="col-md-4 control-label">Nuevo Archivo</label>
            <div class="col-md-6">
                <input type="file" class="form-control" name="file" >
            </div>
                
            
        </div>

        

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {!! Form::close() !!}

@endsection