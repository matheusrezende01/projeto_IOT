<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Models\Ambiente;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('ambiente/edit', AmbienteEdit::class)->name('ambiente.edit');