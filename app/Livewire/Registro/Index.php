<?php

namespace App\Livewire\Registro;

use App\Models\Registro;
use App\Models\Sensor;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
  use WithPagination;

  protected $paginationTheme = 'bootstrap';

  public $search = '';
  public $perpage = 15;

  protected $queryString = [
  'search' => ['except' => ''],
  'perpage' => ['except' => 15]
  ];

  public function render(){
    $registros = Registro::where('sensor_id', 'like', "%{$this->search}%")
    ->orWhere('valor', 'like', "%{$this->search}%")
    ->orwhere('unidade', 'like', "%{$this->search}%")
    ->orwhere('data_hora', 'like', "%{$this->search}%")
    ->orderByDesc('id', 'data_hora', 'valor', 'unidade', 'sensor_id')
    ->paginate($this->perpage);

    return view('livewire.registro.index', compact('registros'));
  }


}