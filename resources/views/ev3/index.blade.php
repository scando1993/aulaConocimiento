@extends('layouts.app')

@section('contentheader_title')
    EV3
@endsection


@section('main-content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success" >
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered" style="width : 80%; margin : 0 auto; ">
        <tr>
            <th width="100px">Titulo</th>
            <th width="100px">Descrip.</th>      
            <th width="280px">Acciones</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ $item->titulo }}</td>
        <td>{{ $item->descripcion }}</td>
        <td>
            <a class="btn btn-info">
                <span class="glyphicon glyphicon-arrow-right"></span>
            </a>
            <a class="btn btn-info" href="{{ route('taller.show',$item->id) }}">
              <span class="glyphicon glyphicon-list-alt"></span>
            </a>
            <a class="btn btn-info" data-toggle="modal" data-target="#edittaller{{ $item->id }}"> 
                <span class="glyphicon glyphicon-pencil"></span>
            </a>
            <a class="btn btn-danger" data-toggle="modal" data-target="#etaller{{ $item->id }}"> 
                <span class="glyphicon glyphicon-remove"></span>
            </a>

        </td>
    </tr>
    @endforeach
    </table>
@endsection