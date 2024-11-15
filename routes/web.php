<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Hello world!!";
});

Route::get('/about', function () {
    echo "ABout us";
});

Route::get('/main/{value}', [MainController::class, 'index']);
