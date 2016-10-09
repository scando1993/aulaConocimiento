@extends('layouts.app')

@section('contentheader_title')
     Creación de Preguntas
@endsection

@section('main-content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pregunta.index') }}"> Retornar</a>
            </div>
        </div>
    </div>

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

    {!! Form::open(array('route' => 'pregunta.store','method'=>'POST')) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Enunciado:</strong>
                {!! Form::text('enunciado', null, array('placeholder' => 'nombre','class' => 'form-control')) !!}
            </div>
        </div>
        
       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ruta:</strong>
                {!! Form::text('ruta', null, array('placeholder' => 'descripcion','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Evaluacion_id:</strong>
                {!! Form::number('evaluacion', null, array('placeholder' => 'evaluacion','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo de Pregunta:</strong>
                {!! Form::text('tipo', null, array('placeholder' => 'tipo','class' => 'form-control')) !!}
            </div>
        </div>

        

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

    </div>
    {!! Form::close() !!}

@endsection