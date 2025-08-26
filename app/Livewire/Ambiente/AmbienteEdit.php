<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class AmbienteEdit extends Component
{
    public $ambienteId;
    public $nome;
    public $descricao;
    public $status;

    public function mount($id)
    {

        $ambiente = Ambiente::find($id);
        if($ambiente == null ){
            session()->flash('error', 'Ambiente não encontrado');
            return redirect()->route('ambiente.list');
        }
        $this->ambienteId = $ambiente->id;
        $this->nome = $ambiente->nome;
        $this->descricao = $ambiente->descricao;
        $this->status = $ambiente->status;

    }
    public function update()

    {

$ambiente = Ambiente::find($this->ambienteId);

$ambiente->update([
    'nome' => $this->nome,
    'descricao' => $this->descricao,
    'status' => $this->status,


]);
    
        seession()->flash('message', 'Ambiente atualizado com sucesso');
        return redirect()->route('ambiente.list');
      
    }
    public function render()
    {
        return view('livewire.ambiente.ambiente-edit');
    }
}
