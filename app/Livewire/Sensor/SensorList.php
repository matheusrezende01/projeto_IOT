<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;
use Livewire\WithPagination;

class SensorList extends Component
{
    use WithPagination;
    
    public $search = '';
    public $perPage = 15;
 
    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 15],
    ];

    // Adicione a lógica para alternar o status
    public function toggleStatus($sensorId)
    {
        $sensor = Sensor::findOrFail($sensorId);
        $sensor->status = !$sensor->status; // Inverte o valor do status
        $sensor->save();

        session()->flash('message', 'Status do sensor atualizado com sucesso.');
    }

         public function delete($id){
    $sensor_id =  Sensor::find($id);

    $sensor_id->delete();
         }
 
    public function render()
    {
        $sensor = Sensor::where('tipo', 'like', "%{$this->search}%")
        ->orWhere('descricao', 'like',  "%{$this->search}%")
        ->orWhere('codigo', 'like',  "%{$this->search}%")
        ->orWhere('status', 'like', "%{$this->search}%")
        ->paginate($this->perPage);
        return view('livewire.sensor.sensor-list', compact('sensor'));
    }

   
        
        
    
}