<?php

namespace App\Livewire\Sensor\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class Edit extends Component
{
    public $sensorId;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

  

    public function mount($id)
    {

        $sensor = Sensor::find($id);
        if($sensor == null ){
            session()->flash('error', 'Sensor não encontrado');
            return redirect()->route('sensor.list');
        }
        $this->sensorId = $sensor->id;
        $this->codigo = $sensor->codigo;
        $this->tipo = $sensor->tipo;
        $this->descricao = $sensor->descricao;
        $this->status = $sensor->status;

    }
    public function update()

    {

$sensor = Sensor::find($this->sensorId);

$sensor->update([
    'codigo' => $this->codigo,
    'tipo' => $this->tipo,
    'descricao' => $this->descricao,
    'status' => $this->status,


]);
    
        seession()->flash('message', 'Sensor atualizado com sucesso');
        return redirect()->route('ambiente.list');
      
    }
    public function render()
    {
        return view('livewire.sensor.sensor.edit');
    }
}
