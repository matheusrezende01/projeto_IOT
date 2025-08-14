<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Models\Ambiente;
use Illuminate\Support\Facades\Route;

Route::get('ambiente/create', AmbienteCreate::class);
Route::get('ambiente/edit', AmbienteEdit::class);