<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
     public $sensor_id;
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

       public function mount($id)
    {

        $sensor = Sensor::find($id);
        if ($sensor == null) {
            session()->flash('error', 'Sensor não encontrado');
            return redirect()->route('sensor.list');
        }
        $this->sensor_id = $sensor->id;
        $this->codigo = $sensor->codigo;
        $this->tipo = $sensor->tipo;
        $this->descricao = $sensor->descricao;
        $this->status = $sensor->status;
    }
    public function update()

    {

        $sensor = Sensor::find($this->sesnorId);

        $sensor->update([
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status,


        ]);

        session()->flash('message', 'Sensor atualizado com sucesso');
        return redirect()->route('sensor.list');
    }
    
    public function render()
    {
        return view('livewire.sensor.sensor-edit');
    }
}
