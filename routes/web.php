<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use App\Models\Ambiente;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('ambiente/edit/{id}', AmbienteEdit::class)->name('ambiente.edit');
Route::get('ambiente/list', AmbienteList::class)->name('ambiente.list');
