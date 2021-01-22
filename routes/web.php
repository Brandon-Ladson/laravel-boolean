<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// saluta tutti gli utenti in inglese (statico, no variabili)
Route::get('/helloAll', function () {

    return view('homeHelloAll');

});

// saluta utente per nome (variabile) in inglese
Route::get('/helloYou', function () {

    return view('homeHelloYou',
      [
        'name' => 'Brandon'
      ]);

});

// saluta utente per nome (stessa varbile, stessa view, ma nome diverso) in inglese
Route::get('/helloYou2', function () {

    return view('homeHelloYou',
      [
        'name' => 'Grace'
      ]);

});

// saluta tutti gli utenti in spagnolo
Route::get('/holaTodo', 'MainController@salutoUtentiSpagnolo');

// saluta utente per nome (variabile) in spagnolo
Route::get('/holaTu', 'MainController@salutaUtenteSpagnolo');

// saluta utente per nome (stessa varbile, stessa view, ma nome diverso) in spagnolo
Route::get('/holaTu2', 'MainController@salutaUtenteSpagnolo2');
