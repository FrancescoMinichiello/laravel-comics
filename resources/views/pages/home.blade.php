@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<div class="container">
    <div class="row justify-content-center gap-4">
        @foreach ($pokemon as $single_pokemon)
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="{{$single_pokemon['immagine']}}" alt="{{$single_pokemon['nome']}}">
            <div class="card-body">
                <h5 class="card-title">{{$single_pokemon['nome']}}</h5>
                <p class="card-text">Elementi:
                    @foreach ($single_pokemon["elementi"] as $elementi)
                     {{$elementi}}{{ !$loop->last ? ', ' : '' }}
                     @endforeach
                    </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Tipo:
                    @foreach ($single_pokemon["tipo"] as $tipo)
                     {{$tipo}}{{ !$loop->last ? ', ' : '' }}
                     @endforeach
                </li>
                <li class="list-group-item">Abilità:
                    @foreach ($single_pokemon["abilita"] as $abilita)
                    {{$abilita}}{{ !$loop->last ? ', ' : '' }}
                    @endforeach
                </li>
                <li class="list-group-item">Specie: {{$single_pokemon['specie']}}</li>
                <li class="list-group-item">Evoluzioni:
                    @foreach ($single_pokemon["evoluzioni"] as $evoluzioni)
                    {{$evoluzioni}}{{ !$loop->last ? ', ' : '' }}
                    @endforeach
                </li>
            </ul>
        </div>
        @endforeach
    </div>
</div>
@endsection
