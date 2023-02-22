<?php

namespace App\Http\Livewire\Admin\Ticket;

use App\Models\Ticket;
use App\Models\User;
use App\Models\Event;
use App\Models\Held;
use App\Models\Place;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $quantity;
    public $idUser;
    public $idEvent;
    public $idHeld;
    public $idPlace;
    public $status;
    
    protected $rules = [
        'quantity' => 'required|numeric',
        'idUser' => 'required',
        'idEvent' => 'required',
        'idHeld'=> 'required', 
        'idPlace' => 'required', 
        'status' => 'required|string',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Ticket') ])]);
        
        $arrayUser = explode(' ', $this->idUser);
        $idUs =  User::where('username', $arrayUser[0])->pluck('id');
        if (!empty($idUs)){
            $this->idUser = $idUs[0];
        }

        $idEve =  Event::where('name', $this->idEvent)->pluck('id');
        if (!empty($idEve)){
            $this->idEvent = $idEve[0];
        }

        $arrayHeld = explode(' ', $this->idHeld);
        $idHe =  Held::where('date', $arrayHeld[0])
                     ->where('time', $arrayHeld[1])->pluck('id');
        if (!empty($idHe)){
            $this->idHeld = $idHe[0];
        }

        $arrayPlace = explode('-', $this->idPlace);
        $idPla =  Place::where('name', $arrayPlace[0])->pluck('id');
        if (!empty($idPla)){
            $this->idPlace = $idPla[0];
        }

        Ticket::create([
            'quantity' => $this->quantity,
            'idUser' => $this->idUser,
            'idEvent' => $this->idEvent,
            'idHeld' => $this->idHeld,
            'idPlace' => $this->idPlace,
            'status' => $this->status,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.ticket.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Ticket') ])]);
    }
}
