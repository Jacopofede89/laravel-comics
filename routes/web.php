<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
}) ->name('index');

Route::get('dettaglio', function () {
    return view('pages.dettaglio');
})->name('dettaglio');
