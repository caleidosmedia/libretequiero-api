@foreach ($animals as $animal)
    @if(!empty($animal->image_url))
    <h3>{{ $animal->scientific_name }} | {{ $animal->common_name }} | {{ $animal->id }}</h3>
    <img src="{{$animal->image_url}}" width="300" />
    @endif
@endforeach