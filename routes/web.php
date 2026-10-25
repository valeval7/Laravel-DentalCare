<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('Principal.index');
})->name('inicio');

Route::get('/sonrisa', function () {
  return view('Principal.sonrisa');
})->name('sonrisa');

Route::get('/agendar', function () {
  return view('Principal.agendar');
})->name('agendar');
