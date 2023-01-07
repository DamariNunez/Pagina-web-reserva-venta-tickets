<?php

namespace App\Http\Livewire\Admin\Held;

use App\Models\Held;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Event;
use App\Models\Place;

class Update extends Component
{
    use WithFileUploads;

    public $held;

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

    public function mount(Held $Held){
        $this->held = $Held;
        $this->idEvent = $this->held->idEvent;
        $this->idPlace = $this->held->idPlace;
        $this->date = $this->held->date;
        $this->time = $this->held->time;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Held') ]) ]);
        
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

        //Verifica si se modifica el evento
        $idAnterior = Held::where('idEvent', '=', $this->held->idEvent)->where('idPlace', $this->held->idPlace)
                          ->where('date', $this->held->date)->where('time', $this->held->time)->pluck('id')->first();
        $idNuevo = Held::where('idEvent', '=', $this->idEvent)->where('idPlace', $this->idPlace)
                       ->where('date', $this->date)->where('time', $this->time)->pluck('id')->first();
        if ($idAnterior != $idNuevo){
            //verificar si se duplica
            $exist = Held::where('idEvent', $this->idEvent)->where('idPlace', $this->idPlace)
                        ->where('date', $this->date)->where('time', $this->time)->first();
            //Modificar lugar, fecha y hora del evento
            if(empty($exist)){
                $this->held->update([
                    'idEvent' => $this->idEvent,
                    'idPlace' => $this->idPlace,
                    'date' => $this->date,
                    'time' => $this->time,
                    'user_id' => auth()->id(),
                ]);
            }else{
                $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('ErrorTypeUpdatedMessage', ['name' => __('Held') ])]);
            }
        }
    }

    public function render()
    {
        return view('livewire.admin.held.update', [
            'held' => $this->held
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Held') ])]);
    }
}
