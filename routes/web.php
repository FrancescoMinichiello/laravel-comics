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
    $pokemon = config("db.pokemon");
    $headerLinks = config("db.headerLinks");
    $footerLinks = config("db.footerLinks");
    return view('pages.home', compact("pokemon", "headerLinks", "footerLinks"));
});
