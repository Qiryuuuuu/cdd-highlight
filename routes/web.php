<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HighlightPageController;

Route::get('/', function () {
    return view('index');
});


Route::get('/navbar', [HighlightPageController::class, 'nav'])->name('nav');