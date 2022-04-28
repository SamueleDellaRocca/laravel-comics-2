<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $linknav = config('linknav');
    $linkdc = config('linkdc');
    $linkdccomics = config('linkdccomics');
    $linkshop = config('linkshop');
    $linksites = config('linksites');
    $linkmain = config('linkmain');
    $carte = config('carte');


    $data = [
        'linknav' => $linknav,
        'linkdc' => $linkdc,
        'linkdccomics' => $linkdccomics,
        'linkshop' => $linkshop,
        'linksites' => $linksites,
        'linkmain' => $linkmain,
        'carte' => $carte,

    ];
    return view('guest.template.home', $data);
})->name('home');

Route::get('/{id}', function ($id) {

    $linknav = config('linknav');
    $linkdc = config('linkdc');
    $linkdccomics = config('linkdccomics');
    $linkshop = config('linkshop');
    $linksites = config('linksites');
    $linkmain = config('linkmain');

    //estraggo dall array l elemento con id richiesto
    $carte = collect(config('carte'));

    $cartaSelezionata = $carte->firstwhere('id', $id);
    if ($cartaSelezionata === null) abort(404);

    return view('guest.template.carta', [
        'title' => $cartaSelezionata['series'] . '- DC',
        'carta' => $cartaSelezionata,


        'linknav' => $linknav,
        'linkdc' => $linkdc,
        'linkdccomics' => $linkdccomics,
        'linkshop' => $linkshop,
        'linksites' => $linksites,
        'linkmain' => $linkmain,
    ]);
})->name('carta');
