@extends('layouts.app')

@section('contentheader_title')
     Actividades
@endsection


@section('main-content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-success" data-toggle="modal" data-target="#nactividad"> Crear nueva actividad</a>
            </div>
        </div>
    </div>

    <div class="row" style="width : 80%; margin : 0 auto;">

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
                    <a class="btn btn-danger" data-toggle="modal" data-target="#eactv{{ $recurso->id }}"> Eliminar</a>

                        <!-- Modal -->
                        <div class="modal fade" id="eactv{{ $recurso->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Confirmar eliminación</h4>
                                </div>
                                
                              <div class="modal-footer">
                                 {!! Form::open(['method' => 'DELETE','route' => ['recurso.destroy', $recurso->id],'style'=>'display:inline']) !!}
                                 <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                                 {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                              </div>
                              
                            </div>
                          </div>
                        </div>



                </td>
            </tr>   
                
            @endforeach
        </table>


<script src="https://code.jquery.com/jquery-3.1.1.js" ></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<!-- Modal -->
<div class="modal fade" id="nactividad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Nueva Actividad</h4>
      </div>
      <div class="modal-body">
        
            {!! Form::open(array('route' => 'recurso.store','method'=>'POST','files' => true)) !!}
            {{ Form::hidden('taller_id', $item->id) }}
            {{ Form::hidden('archivo', '') }}
            {{ Form::hidden('nombre_archivo', '') }}
            {{ Form::hidden('extension','' ) }}
            {!! Form::number('orden', null, array('placeholder' => '#','class' => 'form-control')) !!}
            {!! Form::text('descripcion', null, array('placeholder' => 'Nueva descripcion','class' => 'form-control')) !!}
            <label class="col-md-4 control-label">Nuevo Archivo</label>
            <div class="col-md-6">
                <input type="file" class="form-control" name="file" >
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


           
            

         

@endsection