<?php

use App\Livewire\Dashboard;
use App\Livewire\Sensor\Sensor\Create;
use App\Livewire\Sensor\Sensor\Edit;
use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorEdit;
use App\Livewire\Sensor\SensorList;
use App\Models\Sensor;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\List_;

Route::get('/sensor/create', SensorCreate::class)->name('sensor.create');
Route::get('/sensor/edit', SensorEdit::class)->name('sensor.edit');
Route::get('/sensor/list', SensorList::class)->name('sensor.list');
