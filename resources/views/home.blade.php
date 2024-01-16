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
                            <blockquote class="blockquote mb-0 text-center">
                                <p>{{ $train->arrival_station }} </p>
                            </blockquote>
                            <p>
                                <strong>partenza da</strong> {{ $train->departure_station }} <br>
                                <strong>parte alle</strong> {{date("H:i", strtotime($train->departure_time)) }} <br>
                                <strong>arriva alle</strong>  {{date("H:i", strtotime($train->arrival_time)) }} <br>
                                <strong>treno</strong> {{ $train->train_code}} <br>
                                carrozza n {{ $train->carriages_number}}
                            </p>
                            
                        </div>
                        <button type="button" class="btn btn-info">buy</button>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
