<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{
    public $sensor_id;
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    protected $rules = [
        'ambiente_id' => 'required',
        'codigo' =>'required|unique:sensors,codigo',
        'tipo' => 'required|',
        'descricao' => 'required|max:255',
        'status' => 'required|'
    ];

    protected $messages = [
        'ambiente_id.required' => 'O nome é obrigatório.',
        'codigo.required' => 'O Codigo é obrigatório.',
        'codigo.unique' => 'O codigo deve ser unico',
        'tipo.required' => 'O tipo do sendor é obrigatório.',
        'descricao.required' => 'A descrição deve ser obrigatória',
        'status.required' => 'O status deve ser obrigatória',
        ];

        public function render(){
            $ambientes = Ambiente::all();
           return view('livewire.sensor.sensor-create', compact('ambientes'));
        }

        public function store(){

        
    $this->validate();

        $sensor = Sensor::create([
            'ambiente_id' => $this->ambiente_id,
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status,
]);

 
       return redirect()->route('sensor.list');

  }

  
}
