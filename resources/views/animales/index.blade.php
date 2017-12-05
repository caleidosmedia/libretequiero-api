@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Animales</h3>
            @if (session('danger'))
                <div class="alert alert-danger">
                    {{ session('danger') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif  
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <table id="dataTables-example" class="table table-bordered pases-center data-table">
                <thead>
                    <tr>
                        <th>Nombre Cientifico</th>
                        <th>Clase</th>
                        <th>Orden</th>
                        <th>Acciones</th>                     
                    </tr>
                </thead>
                <tbody>
                    @foreach ($animales as $animal)
                    <tr>
                        <td>{{$animal->scientific_name}}</td>
                        <td>{{$animal->class}}</td>
                        <td>{{$animal->order}}</td>
                    <td>
                        <a href="{{  action('AnimalesController@edit', ['id' => $animal->id]) }}">Editar</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ action('AnimalesController@create') }}" class="btn btn-primary pull-right">Crear Animal</a>  
        </div>
    </div>
</div>
@endsection
