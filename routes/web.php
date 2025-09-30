<?php


use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use App\Models\Ambiente;

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


use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('ambiente/edit/{id}', AmbienteEdit::class)->name('ambiente.edit');
Route::get('ambiente/list', AmbienteList::class)->name('ambiente.list');

Route::get('/', Dashboard::class);


