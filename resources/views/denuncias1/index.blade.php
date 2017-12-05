@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Denuncias</h3>
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
                        <th>Clase</th>
                        <th>Grupo</th>
                        <th>Direccion</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Acciones</th>                     
                    </tr>
                </thead>
                <tbody>
                    @foreach ($denuncias as $denuncia)
                    <tr>
                        <td>{{$denuncia->clase}}</td>
                        <td>{{$denuncia->grupo}}</td>
                        <td>{{$denuncia->direccion}}</td>
                        <td>{{$denuncia->created_at}}</td>
                        <td>{{$denuncia->estado}}</td>
                    <td>
                        <a href="{{  action('DenunciasController@view', ['id' => $denuncia->id]) }}">Ver</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
