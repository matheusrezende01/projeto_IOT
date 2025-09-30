<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AmbienteList extends Component
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
        $ambiente = Ambiente::all();
        return view('livewire.ambiente.ambiente-list', compact('ambiente'));
    }
public function delete($id){
    $ambinete_id =  Ambiente::find($id);

    $ambinete_id->delete();
}

    }

