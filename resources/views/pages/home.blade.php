@extends('layouts.app')

@section('page-title', 'Pokemon')

@section('main-content')
    <div class="container">
        <div class="row justify-content-center gap-4">
            @foreach ($pokemons as $index => $single_pokemon)
                <div class="card" style="width: 20rem;">
                    <a href="{{ route('pokemon', $index) }}">
                        <span class="text-center badge text-bg-success p-2 rounded-4 fs-5 fw-semibold text-white mt-2">Guarda
                            info:
                            {{ $single_pokemon['nome'] }}
                        </span>
                    </a>
                    <img class="card-img-top" src="{{ $single_pokemon['immagine'] }}" alt="{{ $single_pokemon['nome'] }}">
                    <div class="card-body">
                        <p class="card-text">Elementi:
                            @foreach ($single_pokemon['elementi'] as $elementi)
                                {{ $elementi }}{{ !$loop->last ? ', ' : '' }}
                            @endforeach
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Tipo:
                            @foreach ($single_pokemon['tipo'] as $tipo)
                                {{ $tipo }}{{ !$loop->last ? ', ' : '' }}
                            @endforeach
                        </li>
                        <li class="list-group-item">Abilità:
                            @foreach ($single_pokemon['abilita'] as $abilita)
                                {{ $abilita }}{{ !$loop->last ? ', ' : '' }}
                            @endforeach
                        </li>
                        <li class="list-group-item">Specie: {{ $single_pokemon['specie'] }}</li>
                        <li class="list-group-item">Evoluzioni:
                            @foreach ($single_pokemon['evoluzioni'] as $evoluzioni)
                                {{ $evoluzioni }}{{ !$loop->last ? ', ' : '' }}
                            @endforeach
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection
