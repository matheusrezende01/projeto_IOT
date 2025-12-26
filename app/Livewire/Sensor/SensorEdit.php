<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
    {
 
    public $sensorId;
    public $ambiente;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;
 
 
    protected function rules()
    {
        return [
            'codigo' => 'max:255',
            'tipo' => 'max:255',
            'descricao' => 'max:255',
 
        ];
    }
 
    protected $messages = [
     
 
     
       'codigo.max' => 'O maximo de caracteres é de 255',
 
        'tipo.max' => 'o maximo de caracteres é de 255',
 
        'descricao.required' => 'A descrição é necessaria',
       
    ];
 
    public function mount($id)
    {
        $sensor = Sensor::find($id);
        if ($sensor == null) {
            session()->flash('error', 'Sensor Não Encontrado');
            return redirect()->route('sensor.list');
        } else {
            $this->sensorId = $sensor->id;
            $this->ambiente = $sensor->ambiente_id;
            $this->codigo = $sensor->codigo;
            $this->tipo = $sensor->tipo;
            $this->descricao = $sensor->descricao;
            $this->status = $sensor->status;
        }
    }
 
    public function save()
    {
        $this->validate();

        $sensor = Sensor::find($this->sensorId);
       
 
        $sensor->ambiente_id = $this->ambiente;
        $sensor->descricao = $this->descricao;
        $sensor->codigo = $this->codigo;
        $sensor->tipo = $this->tipo;
        $sensor->status = $this->status;
        $sensor->save();
 
       
 
        session()->flash('message', 'Sensor atualizado com sucesso');
        return redirect()->route('sensor.list');
    }
 
    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.sensor.sensor-edit', compact('ambientes'));
    }
}
