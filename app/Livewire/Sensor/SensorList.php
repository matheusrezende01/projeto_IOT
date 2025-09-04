<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;
use Livewire\WithPagination;

class SensorList extends Component
{
    
    use WithPagination;

    public $search = '';
    public $perPage = 10;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 10],
    ];

    public function render()
    {
        $sesor = Sensor::all();
        return view('livewire.sensor.sensor-list', compact('sensor'));
    }
public function delete($id){
    $sensor_id =  Sensor::find($id);

    $sensor_id->delete();
}

    }

