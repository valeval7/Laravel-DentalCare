<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('principal.index');
});

// Route::get('/redirigir', function () {
//   return redirect()->route('inicio');
// });

// Route::get('/sonrisa', function () {
//   return view('principal.sonrisa');
// })->name('sonrisa');

// Route::get('/agendar', function () {
//   return view('principal.agendar');
// })->name('agendar');
