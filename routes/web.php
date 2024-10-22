<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

route::get('/pokemons', function () {
    $pokemon = config("db.pokemon");
    return view('pages.pokemon-index', compact("pokemon"));
});

route::get('/', function () {
    $navLinks = config("db.navLinks");
    return view('partials.header', compact("navLinks"));
});
