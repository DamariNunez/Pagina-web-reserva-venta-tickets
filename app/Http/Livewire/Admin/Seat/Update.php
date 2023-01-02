<?php

namespace App\Http\Livewire\Admin\Seat;

use App\Models\Seat;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Place;
use App\Models\City;

class Update extends Component
{
    use WithFileUploads;

    public $seat;

    public $row;
    public $chair;
    public $idPlace;
    
    protected $rules = [
        'row' => 'required',
        'chair' => 'required',
        'idPlace' => 'required',        
    ];

    public function mount(Seat $Seat){
        $this->seat = $Seat;
        $this->row = $this->seat->row;
        $this->chair = $this->seat->chair;
        $this->idPlace = $this->seat->idPlace;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Seat') ]) ]);
        
        //Obtener el id del lugar seleccionado
        $arrayPlace = explode('-', $this->idPlace);
        $idPla =  Place::where('name', $arrayPlace[0])->pluck('id');
        if (!empty($idPla)){
            $this->idPlace = $idPla[0];
        }

        //Modificar asiento
        $this->seat->update([
            'row' => $this->row,
            'chair' => $this->chair,
            'idPlace' => $this->idPlace,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.seat.update', [
            'seat' => $this->seat
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Seat') ])]);
    }
}
