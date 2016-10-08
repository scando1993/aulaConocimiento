@extends('layouts.app')

@section('contentheader_title')
     Mantenimiento de Evaluaciones
@endsection 

@section('main-content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" data-toggle="modal" data-target="#nEval">
                  <span class="glyphicon glyphicon-plus"></span> Crear nueva evaluacion
                 </a>
            </div>
        </div>
    </div>

    <!-- Modal Nueva evaluacion-->
<div>
<div class="modal fade" id="nEval" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Nueva Evaluacion</h4>
        </div>
        <div class="modal-body">

            {!! Form::open(array('route' => 'evaluacion.store','method'=>'POST')) !!}
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {!! Form::text('nombre', null, array('placeholder' => 'nombre','class' => 'form-control')) !!}
                        </div>
                    </div>
                    
                   <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {!! Form::text('fecha', null, array('placeholder' => 'fecha','class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tiempo:</strong>
                            {!! Form::text('tiempo', null, array('placeholder' => 'tiempo','class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Taller:</strong>
                            {!! Form::number('taller_id', null, array('placeholder' => 'Taller','class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered" style="width : 80%; margin : 0 auto;">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Tiempo</th>
            <th>Taller</th>
            

            <th width="280px">Acciones</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $item->nombre }}</td>
        <td>{{ $item->fecha }}</td>
        <td>{{ $item->tiempo }}</td>
        <td>{{ $item->taller_id }}</td>
        <td>
           
        </td>
    </tr>
    @endforeach
    </table>

    {!! $items->render() !!}

@endsection