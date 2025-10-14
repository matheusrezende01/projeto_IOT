<?php

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SensorController;
use App\Livewire\Sensor\SensorList;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('registro/create', [RegistroController::class, "store"]);

Route::get('registro/index', [RegistroController::class, "index"]);

Route::get('sensor/status', [SensorController::class, "status"]);

Route::put('sensor/update', [SensorController::class, "update"]);
