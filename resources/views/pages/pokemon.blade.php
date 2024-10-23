@extends('layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-1 d-flex justify-content-end align-items-center">
                <span class="mt-3">
                    <a class="back-icon" href="/">
                        &#8619;
                    </a>
                </span>
            </div>
            <div class="col card">
                <span class="text-center badge text-bg-info p-2 rounded-4 fs-5 fw-semibold text-white mt-2">
                    {{ $pokemon['nome'] }}
                </span>
                <img class="card-img-top" src="{{ $pokemon['immagine'] }}" alt="{{ $pokemon['nome'] }}">
                <div class="card-body">
                    <p class="card-text">Elementi:
                        @foreach ($pokemon['elementi'] as $elementi)
                            {{ $elementi }}{{ !$loop->last ? ', ' : '' }}
                        @endforeach
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Tipo:
                        @foreach ($pokemon['tipo'] as $tipo)
                            {{ $tipo }}{{ !$loop->last ? ', ' : '' }}
                        @endforeach
                    </li>
                    <li class="list-group-item">Abilità:
                        @foreach ($pokemon['abilita'] as $abilita)
                            {{ $abilita }}{{ !$loop->last ? ', ' : '' }}
                        @endforeach
                    </li>
                    <li class="list-group-item">Specie: {{ $pokemon['specie'] }}</li>
                    <li class="list-group-item">Evoluzioni:
                        @foreach ($pokemon['evoluzioni'] as $evoluzioni)
                            {{ $evoluzioni }}{{ !$loop->last ? ', ' : '' }}
                        @endforeach
                    </li>
                </ul>
            </div>
            <div class="col-8">
                <h1>{{ $pokemon['nome'] }}</h1>
                <p class="single-pokemon-description fw-semibold">
                    {{ $pokemon['descrizione'] }}
                </p>
            </div>

        </div>
    </div>
@endsection
