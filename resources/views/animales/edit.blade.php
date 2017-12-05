@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3 class="h3-margen">Editar Vehiculo</h3>    

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
        
            {!! Form::model($vehiculo, ['url' => "admin/vehiculos/$vehiculo->id", 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
        
            <div class="form-group">
                {!! Form::label('cliente', 'Cliente', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-9">
                    {!!  Form::select('user_id', [null=>'Seleccione cliente'] + $clientes, null, ['class' => 'form-control','required'])  !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('tipo', 'Tipo vehiculo', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-9">
                    {!!  Form::select('tipo_id', [null=>'Seleccione tipo'] + $tipos, null, ['class' => 'form-control','required'])  !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('placa', 'Placa', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-9">
                    {!!  Form::text('placa', null, ['class' => 'form-control','required'])  !!}
                </div>
            </div>

            {!! Form::submit('Editar Vehiculo', ['class' => 'btn btn-primary']) !!}
            
            {!! Form::close() !!}

            <p><a href="{{ action('Admin\VehiculosController@index') }}">Regresar</a></p>
        </div>
    </div>
</div>

@endsection