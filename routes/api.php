<?php

use App\Http\Controllers\RegistroController;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('registro/create', [RegistroController::class, "store"]);

Route::get('registro/index', [RegistroController::class, "index"]);
