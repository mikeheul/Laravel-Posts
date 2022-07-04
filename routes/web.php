<?php

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
