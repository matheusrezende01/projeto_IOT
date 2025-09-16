<?php

namespace App\Livewire\Registro;

use App\Models\Registro;
use App\Models\Sensor;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
  

    public $search = '';
    public $perPage = 10;
    
    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 10],
    ];

    public function render()
    {
        $ambiente = Ambiente::all();
        return view('registro.index', compact('registro'));
    }
public function delete($id){
    $registro_id =  Registro::find($id);

    $registro_id->delete();
}

}
        return view('livewire.registro.index');
    }
