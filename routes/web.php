<?php

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

Route::get('/', function () {
    return view('home');
})->name('homepage');

Route::get('/faq', function () {
    return view('faq',
    [
        'faq_sinistra' => config('dati_faq.faqs_sx'),
        'faq_destra' => config('dati_faq.faqs_dx')
    ]);
})->name('domande-frequenti');
