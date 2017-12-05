@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3 class="h3-margen">Crear Animal</h3>    

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
                    
            {!! Form::open(['url' => 'admin/animals', 'class' => 'form-horizontal']) !!}
        
            <div class="form-group">
                {!! Form::label('scientific_name', 'Nombre Cientifico', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-9">
                    {!!  Form::text('scientific_name', null, ['class' => 'form-control','required'])  !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('common_name', 'Nombre Comun', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-9">
                    {!!  Form::text('common_name', null, ['class' => 'form-control'])  !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('category', 'Categoria', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-9">
                    {!!  Form::select('category', [null=>'Seleccione categoria'] + $categorias, null, ['class' => 'form-control','required'])  !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('class', 'Clase', ['class' => 'col-sm-3']) !!}
                <div class="col-sm-9">
                    {!!  Form::select('class', [null=>'Seleccione clase'] + $clases, null, ['class' => 'form-control'])  !!}
                </div>
            </div>

            {!! Form::submit('Crear Animal', ['class' => 'btn btn-primary']) !!}
            
            {!! Form::close() !!}

            <p><a href="{{ action('AnimalesController@index') }}">Regresar</a></p>
        </div>
    </div>
</div>

@endsection