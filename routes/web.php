<?php

use App\Http\Controllers\BotmanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);
