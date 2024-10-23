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
    $pokemons = config("db.pokemon");
    $headerLinks = config("db.headerLinks");
    $footerLinks = config("db.footerLinks");
    return view('pages.home', compact("pokemons", "headerLinks", "footerLinks"));
})->name('home');

Route::get('/pokemon/{index}', function (string $index) {
    $pokemons = config("db.pokemon");
    $pokemon = $pokemons[$index];
    $headerLinks = config("db.headerLinks");
    $footerLinks = config("db.footerLinks");
    return view('pages.pokemon', compact("pokemon", "headerLinks", "footerLinks"));
})->name('pokemon');