<?php

namespace App\Http\Livewire\Admin\Seat;

use App\Models\Seat;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Place;
use App\Models\City;

class Create extends Component
{
    use WithFileUploads;

    public $row;
    public $chair;
    public $idPlace;
    
    protected $rules = [
        'row' => 'required',
        'chair' => 'required',
        'idPlace' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Seat') ])]);
        
        //Obtener el id del lugar seleccionado
        $arrayPlace = explode('-', $this->idPlace);
        $idPla =  Place::where('name', $arrayPlace[0])->pluck('id');
        if (!empty($idPla)){
            $this->idPlace = $idPla[0];
        }

        //Almacenar asiento
        Seat::create([
            'row' => $this->row,
            'chair' => $this->chair,
            'idPlace' => $this->idPlace,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.seat.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Seat') ])]);
    }
}
