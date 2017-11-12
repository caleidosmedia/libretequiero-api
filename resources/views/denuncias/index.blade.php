@foreach($denuncias as $denuncia)
    <ul>
        <li>Id: {{$denuncia->id}}</li>  
        <li>Imagen: <img src="data:image/jpeg;base64,{{ $denuncia->imagen }}"></li>
    </ul>

@endforeach