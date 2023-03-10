<?php

namespace App\Http\Livewire\Admin\Held;

use App\Models\Held;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Event;
use App\Models\Place;

class Create extends Component
{
    use WithFileUploads;

    public $idEvent;
    public $idPlace;
    public $date;
    public $time;
    
    protected $rules = [
        'idEvent' => 'required',
        'idPlace' => 'required',
        'date' => 'required|date',
        'time' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Held') ])]);
        
        //Obtener el id del evento seleccionado
        $idEve =  Event::where('name', $this->idEvent)->pluck('id');
        if (!empty($idEve)){
            $this->idEvent = $idEve[0];
        }

        //Obtener el id del lugar seleccionado
        $arrayPlace = explode('-', $this->idPlace);
        $idPla =  Place::where('name', $arrayPlace[0])->pluck('id');
        if (!empty($idPla)){
            $this->idPlace = $idPla[0];
        }

        //verificar si se duplica
        $exist = Held::where('idEvent', $this->idEvent)->where('idPlace', $this->idPlace)
                     ->where('date', $this->date)->where('time', $this->time)->first();

        //Almacenar lugar y fecha para el evento seleccionado
        if(empty($exist)){
            Held::create([
                'idEvent' => $this->idEvent,
                'idPlace' => $this->idPlace,
                'date' => $this->date,
                'time' => $this->time,
                'user_id' => auth()->id(),
            ]);
            $this->reset();
        }else{
            $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('ErrorTypeUpdatedMessage', ['name' => __('Held') ])]);
        }
    }

    public function render()
    {
        return view('livewire.admin.held.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Held') ])]);
    }
}
