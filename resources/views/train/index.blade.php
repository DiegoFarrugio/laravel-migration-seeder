@extends('layouts.app')

@section('page-title', 'Train')


@section('header')
<h1 class="text-center">Partenze treni</h1>
@endsection

@section('main')
<main>
    <div class="container">
        @foreach ($trains as $train)
            <ul>
                <li>
                    Codice treno: {{ $train->codice }}
                </li>
                <li>
                    Azienda: {{ $train->azienda }}
                </li>
                <li>
                    Stazione partenza: {{ $train->stazione_partenza }}
                </li>
                <li>
                    Stazione arrivo: {{ $train->stazione_arrivo }}
                </li>
            </ul>
            <hr>
        @endforeach
    </div>
</main>
@endsection
