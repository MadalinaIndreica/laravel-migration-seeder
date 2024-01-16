@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Ciao! dove vuoi andare?</h1>
        <h2 class="text-center mb-5">questi sono i treni che partono oggi,scegli la tua meta!</h2>
        <div class="row mt-5">
            @foreach ($trains as $train)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>{{ $train->arrival_station }} </p>
                            </blockquote>
                            <p>partenza da {{ $train->departure_station }}</p>
                            <p>alle {{date("H:i:s", strtotime($train->departure_time))  }} </p>
                            <p>alle {{$train->departure_time->format("H:i:s")}} </p>
                        </div>
                        <button type="button" class="btn btn-info">buy</button>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
