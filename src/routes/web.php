<?php

use Davidle90\Products\app\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/test', ProductsController::class);