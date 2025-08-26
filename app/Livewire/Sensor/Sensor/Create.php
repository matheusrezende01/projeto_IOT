<?php

namespace App\Livewire\Sensor\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class Create extends Component
{
     
   public $sensor_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;



    
    public function store(){

        Sensor::create([
            'sensor_id' => $this->sensor_id,
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status,
        ]);

        session()->flash('message', 'Sensor cadastrado com sucesso');
       return redirect()->route('sensor.list');
   
    }

    public function render()
    {
        return view('livewire.sensor.sensor.create');
    }
}
