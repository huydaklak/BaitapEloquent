<?php

use App\Http\Controllers\thang3mday;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/nsx', [thang3mday::class, 'get_all']);



