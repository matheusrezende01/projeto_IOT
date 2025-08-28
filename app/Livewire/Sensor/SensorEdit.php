<?php

namespace App\Livewire\Sensor;

use Livewire\Component;

class SensorEdit extends Component
{
     public $sensor_id;
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    
    public function render()
    {
        return view('livewire.sensor.sensor-edit');
    }
}
