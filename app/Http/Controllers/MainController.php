<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
  // funzione per salutare tutti gli utenti in spagnolo
  public function salutoUtentiSpagnolo() {

    return view('homeHolaTodo');

  }

  // funzione per salutare utente per nome in spagnolo
  public function salutaUtenteSpagnolo() {

      return view('homeHolaTu',
      [
        'name' => 'Brandon'
      ]);

  }

  // funzione per salutare utente con altro nome in spagnolo (con compact)
  public function salutaUtenteSpagnolo2() {

      $name = 'Grace';

      return view('homeHolaTu', compact('name'));

  }

}
