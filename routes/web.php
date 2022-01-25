<?php

use Illuminate\Support\Facades\Route;

Route::get('/','IndexController@index')->name('index');

Route::get('dettaglio', 'IndexController@dettaglio') ->name('dettaglio');
