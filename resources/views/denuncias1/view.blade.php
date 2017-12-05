@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3 class="h3-margen">Ver Denuncia</h3>    

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        
            {!! Form::model($denuncia, ['url' => "admin/denuncias/$denuncia->id", 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
        
            <div class="form-group">
                {!! Form::label('clase', 'Clase', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-9">
                    {!!  Form::text('clase', null, ['class' => 'form-control','readonly'])  !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('grupo', 'Grupo', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-9">
                    {!!  Form::text('grupo', null, ['class' => 'form-control','readonly'])  !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('direccion', 'Direccion', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-9">
                    {!!  Form::text('direccion', null, ['class' => 'form-control','readonly'])  !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('fecha', 'Fecha', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-9">
                    {!!  Form::text('created_at', null, ['class' => 'form-control','readonly'])  !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('estado', 'Estado', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-9">
                    {!!  Form::text('estado', null, ['class' => 'form-control','readonly'])  !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('almacenamiento', 'Almacenamiento', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-9">
                    {!!  Form::text('almacenamiento', null, ['class' => 'form-control','readonly'])  !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('tipo_locacion', 'Tipo de Locacion', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-9">
                    {!!  Form::text('tipo_locacion', null, ['class' => 'form-control','readonly'])  !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('descripcion', 'Descripcion', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-9">
                    {!!  Form::text('descripcion', null, ['class' => 'form-control','readonly'])  !!}
                </div>
            </div>
            @if($denuncia->imagen)
            <div class="form-group">
                {!! Form::label('imagen', 'Imagen', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-9">
                    <img src="data:image/jpeg;base64,{{ $denuncia->imagen }}" width="100%">
                </div>
            </div>
            @endif
            <div class="form-group">
                {!! Form::label('ubicacion', 'Ubicacion', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-9">
                    <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q={{$denuncia->coordenadas}}&key=AIzaSyAKLJlQ0RxbqL67lXO14Pbxod3kuu5zGnM" allowfullscreen></iframe>
                </div>
            </div>

            {!! Form::close() !!}

            <p><a href="{{ action('DenunciasController@index') }}">Regresar</a></p>
        </div>
    </div>
</div>

@endsection