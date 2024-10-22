@extends("layouts.app")
@section("page-title", "Pokemon Index")

@section("main-content")
<ul>
    @foreach ($pokemon as $pokemons)
    <li>
        {{$pokemons["nome"]}}
    </li>
    @endforeach
</ul>
@endsection
