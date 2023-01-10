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
        'row' => 'required|string',
        'chair' => 'required|numeric',
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

        $idAnterior = Seat::where('row', $this->seat->row)->where('chair', $this->seat->chair)->where('idPlace', $this->seat->idPlace)->pluck('id')->first();
        $idNuevo = Seat::where('row', $this->row)->where('chair', $this->chair)->where('idPlace', $this->idPlace)->pluck('id')->first();
        if ($idAnterior != $idNuevo){
            //verificar si se duplica
            $exist = Seat::where('row', $this->row)->where('chair', $this->chair)->where('idPlace', $this->idPlace)->first();
            //Modificar asiento
            if(empty($exist)){
                $this->seat->update([
                    'row' => $this->row,
                    'chair' => $this->chair,
                    'idPlace' => $this->idPlace,
                    'user_id' => auth()->id(),
                ]);
            }else{
                $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('ErrorTypeUpdatedMessage', ['name' => __('Held') ])]);
            }
        }
    }

    public function render()
    {
        return view('livewire.admin.seat.update', [
            'seat' => $this->seat
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Seat') ])]);
    }
}
