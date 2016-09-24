@extends('layouts.app')

@section('contentheader_title')
    LISTADO DE TALLERES
@endsection


@section('main-content')

    

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Titulo</th>
                  
            <th width="280px">Acciones</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $item->titulo }}</td>
        
        <td>
            <a class="btn btn-info" href="{{ URL('realizar',$item->id) }}">Realizar</a>
            
        </td>
    </tr>
    @endforeach
    </table>

    {!! $items->render() !!}

@endsection