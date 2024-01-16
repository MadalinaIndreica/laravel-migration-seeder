@extends('layouts.app')

@section('content')
    <h1>Ciao! dove vuoi andare?</h1>
    <h2>questi sono i treni che partono oggi,scegli la tua meta!</h2>
    <ul>
        @foreach ($trains as $train)
            <li>{{ $train->arrival_station}}</li>
        @endforeach
    </ul>
@endsection