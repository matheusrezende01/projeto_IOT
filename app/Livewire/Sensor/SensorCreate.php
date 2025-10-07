<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{
    public $ambiente;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    protected $rules = [
        'ambiente' => 'required',
        'codigo' => 'required|unique:sensors,codigo|max:255|min:1',
        'tipo' => 'required|string|max:255|min:1',
        'status' => 'required',
    ];

    protected $messages = [
        'ambiente.required' => 'É Necessario o ID do anbiente',


        'codigo,required' => 'É Necessario o codigo',
        'codigo.string' => 'O campo codigo tem q ser um texto Válido',
        'codigo.unique' => 'Este codigo já está cadastrado.',
        'codigo.max' => 'o maximo de caracteres é de 255',
        'codigo.min' => 'o minimo de caracteres é 1',

        'tipo,required' => 'É Necessario o tipo do sensor',
        'tipo.string' => 'O campo tipo tem q ser um texto Válido',
        'tipo.max' => 'o maximo de caracteres é de 255',
        'tipo.min' => 'o minimo de caracteres é 1',

        'status.required' => 'status é obrigatorio'


    ];

    public function store()
    {

        $this->validate();

        if ($this->ambiente == null) {
       session()->flash('message', 'Sensor não encontrado.');
        }
            Sensor::create([
                'ambiente_id' => $this->ambiente,
                'codigo' => $this->codigo,
                'tipo' => $this->tipo,
                'descricao' => $this->descricao,
                'status' => $this->status,
            ]);

            session()->flash('message', 'Sensor criado com suceso.');
            return redirect()->route('sensor.list');
        }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.sensor.sensor-create', compact('ambientes'));
    }
}


